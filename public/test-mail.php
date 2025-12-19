<?php
declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;
use App\helpers\Mailer;

// Charge le .env (racine du projet)
$dotenv = Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

$mailer = new Mailer();

try {
    $mailer->sendHtml(
        toEmail: 'anousone.mounivongs@afpa.fr',
        toName: 'Test',
        subject: 'Test SMTP Gmail (DWWM)',
        htmlBody: '<h1>Hello 👋</h1><p>Mail envoyé depuis PHP vanilla + Docker.</p>'
    );

    echo "✅ Mail envoyé";
} catch (RuntimeException $e) {
    echo nl2br($e->getMessage());
}
