<?php
declare(strict_types=1);

namespace App\helpers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as PHPMailerException;

final class Mailer
{
    /**
     * Envoie un mail HTML (avec AltBody texte).
     * En DEV: on lève une exception claire si ça échoue.
     */
    public function sendHtml(
        string $toEmail,
        string $toName,
        string $subject,
        string $htmlBody,
        ?string $textBody = null
    ): void {
        $mail = new PHPMailer(true);

        try {
            // --- SMTP (Google) ---
            $mail->isSMTP();

            // Host/Port depuis .env (ou variables d'environnement docker)
            $mail->Host       = $this->env('SMTP_HOST', 'smtp.gmail.com');
            $mail->Port       = (int)$this->env('SMTP_PORT', '587');

            // Gmail = authentification obligatoire
            $mail->SMTPAuth   = true;
            $mail->Username   = $this->env('SMTP_USER');   // email complet
            $mail->Password   = $this->env('SMTP_PASS');   // App Password Google

            // Port 587 => STARTTLS
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

            // Debug (utile en DEV)
            // 0 = off, 2 = verbose (à activer si un apprenant bloque)
            $mail->SMTPDebug  = 0;

            // --- Expéditeur ---
            $fromEmail = $this->env('SMTP_FROM', $mail->Username);
            $fromName  = $this->env('SMTP_FROM_NAME', 'Projet DWWM');
            $mail->setFrom($fromEmail, $fromName);

            // --- Destinataire ---
            $mail->addAddress($toEmail, $toName);

            // --- Contenu ---
            $mail->CharSet = 'UTF-8';
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $htmlBody;

            // Fallback texte (au cas où le HTML est bloqué)
            $mail->AltBody  = $textBody ?? strip_tags($htmlBody);

            $mail->send();
        } catch (PHPMailerException $e) {
            // Message clair pour les apprenants
            throw new \RuntimeException(
                "❌ Envoi email impossible.\n".
                "👉 Vérifie SMTP_USER / SMTP_PASS (App Password Google) + port 587 TLS.\n".
                "Détail: ".$mail->ErrorInfo
            );
        }
    }

    /**
     * Récupère une variable d'environnement.
     * - d'abord getenv() (docker-compose environment)
     * - sinon $_ENV (dotenv)
     */
    private function env(string $key, ?string $default = null): string
    {
        $value = getenv($key);

        if ($value === false || $value === '') {
            $value = $_ENV[$key] ?? '';
        }

        if ($value === '' && $default === null) {
            throw new \RuntimeException("Variable manquante dans l'environnement: {$key}");
        }

        return $value !== '' ? $value : (string)$default;
    }
}
