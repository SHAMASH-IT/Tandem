<?php
header("Strict-Transport-Security: max-age=31536000;includeSubDomains;preload");
header("X-Frame-Options: DENY");
header("X-Content-Type-Options: nosniff");
header_remove('x-powered-by');
header("X-XSS-Protection: 0");
header("Referrer-Policy: no-referrer");
header('X-Powered-By: Start X Project Inc ; www.startxproject.com/project/anoha_academy');
// header("Content-Security-Policy: default-src 'self'; script-src 'self' 'unsafe-inline' 'unsafe-eval'");