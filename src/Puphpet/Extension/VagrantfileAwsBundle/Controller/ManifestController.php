<?php

namespace Puphpet\Extension\VagrantfileAwsBundle\Controller;

use Puphpet\MainBundle\Extension;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ManifestController extends Controller implements Extension\ControllerInterface
{
    public function indexAction(array $data)
    {
        return $this->render('PuphpetExtensionVagrantfileAwsBundle:manifest:VagrantfileAws.pp.twig', [
            'data' => $data,
        ]);
    }
}
