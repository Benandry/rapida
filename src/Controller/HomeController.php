<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\EnvoiRepository;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(EnvoiRepository $envoi, Request $request): Response
    {
        
        $debut = $request->query->get('debut');
        $fin = $request->query->get('fin');
        $numero = $request->query->get('numero');
        $numeroBordereau = $request->query->get('numeroBordereau');
        if ($debut != NULL && $fin != NULL) {
            $res = $envoi->findAllEnvoiByDate($debut, $fin);
        }
        if ($numero != NULL) {
            $numEnvoi = $envoi->findAllEnvoiByNumero($numero);     
        }
        if ($numeroBordereau != NULL) {
            
        }




        $numeroFacture = $request->query->get('numeroFacture');
        $types = $request->query->get('types');
        $expediteur = $request->query->get('expediteur');
        $destinataire = $request->query->get('destinataire');
        $idExpediteur = $request->query->get('idExpediteur');
        $idDestinataire = $request->query->get('idDestinataire');
        //dd($idDestinataire);
        dd($numEnvoi);
        $titre = $res[0];
        return $this->render('home/index.html.twig', [
            'titre'=>$titre,
            'resultat'=>$res,
            'debut' => $debut,
            'fin' => $fin
        ]);
    }
}
