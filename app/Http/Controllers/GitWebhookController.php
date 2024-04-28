<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class GitWebhookController extends Controller
{
    public function handle(Request $request)
    {
        $secret = '4XS2%DE;(Yk}i9#~6JL6k!2TTiiBvg63brKD{e2$Lqm4/B638^c4=a49e[Gj:V*+';
        // Vérifiez le secret pour s'assurer que la requête vient de GitHub/GitLab/Bitbucket
        $signature = $request->header('X-Hub-Signature');
        // Vous pouvez implémenter une logique de validation du secret ici
        list($algo, $hashValue) = explode('=', $signature, 2);

        $payload = $request->getContent();
        $payloadHash = hash_hmac($algo, $payload, $secret);

        if (!hash_equals($hashValue, $payloadHash)) {
            Log::warning('Échec de la vérification de la signature du webhook.');
            return response()->json(['message' => 'Signature non valide.'], 403);
        }

        // Exécutez git pull
        $process = new Process(['git', 'pull'], '/var/www/kenopsis');
        $process->run();

        // Vérifiez si le processus a réussi
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        // Réponse
        return response()->json(['success' => true]);
    }
}
