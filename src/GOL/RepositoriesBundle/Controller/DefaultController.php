<?php

namespace GOL\RepositoriesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GOL\RepositoriesBundle\Entity\mostCollaborators;
use GOL\RepositoriesBundle\Entity\mostRanked;

class DefaultController extends Controller
{
    public function moreRankedAction()
    {
        $mostRanked = $this->getDoctrine()->getRepository('GOLRepositoriesBundle:mostRanked')->findAll();
        
        $rankedResponse = array();
        foreach($mostRanked as $ranked){
            $rankedResponse[] = array(
                'repository' => $ranked->getRepository(),
                'author' => $ranked->getauthor(),
                'url' => $ranked->getUrl(),
                'description' => $ranked->getDescription(),
                'stars' => $ranked->getStars(),
            );
        }
        
        return $this->render('GOLRepositoriesBundle:Default:more-ranked.html.twig', array(
            'mostPopulars' => $rankedResponse,
        ));
    }
    
    public function moreCollaboratorsAction()
    {
        $mostCollaborator = $this->getDoctrine()->getRepository('GOLRepositoriesBundle:mostCollaborators')->findAll();
        
        $collaboratorsResponse = array();
        foreach($mostCollaborator as $collaborator){
            $collaboratorsResponse[] = array(
                'repository' => $collaborator->getRepository(),
                'author' => $collaborator->getauthor(),
                'url' => $collaborator->getUrl(),
                'description' => $collaborator->getDescription(),
                'collaborators' => $collaborator->getCollaborators(),
            );
        }
        
        return $this->render('GOLRepositoriesBundle:Default:more-collaborators.html.twig', array(
            'mostCollaborators' => $collaboratorsResponse,
        ));
    }
    
    public function updateDataAction()
    {
//        $emptyTables = $this->getDoctrine()->getManager();
//        $emptyTables->createQuery('TRUNCATE most_collaborators')->execute();
//        $emptyTables->createQuery('TRUNCATE most_ranked')->execute();
        
        $service = $this->get('gol_api');
        $mostCollaborators = $service->apiGetMostCollaboratorsRepositories();
        $mostCollaborators = array_slice($mostCollaborators, 0, 10);
        
        $em = $this->getDoctrine()->getManager();
        foreach ($mostCollaborators as $mostCollaborator){
            $mostCollaboratorsEntity = new mostCollaborators();
            $mostCollaboratorsEntity->setRepository($mostCollaborator['name']);
            $mostCollaboratorsEntity->setAuthor($mostCollaborator['owner']['login']);
            $mostCollaboratorsEntity->setUrl($mostCollaborator['html_url']);
            $mostCollaboratorsEntity->setDescription($mostCollaborator['description']);
            $mostCollaboratorsEntity->setCollaborators(0);
            
            $em->persist($mostCollaboratorsEntity);
            $em->flush();
        }
        
        $mostPopulars = $service->apiGetPopularRepositories();
        $mostPopulars = array_slice($mostPopulars, 0, 10);
        
        $em1 = $this->getDoctrine()->getManager();
        foreach ($mostPopulars as $mostPopular){
            $mostRankedEntity = new mostRanked();
            $mostRankedEntity->setRepository($mostPopular['name']);
            $mostRankedEntity->setAuthor($mostPopular['owner']['login']);
            $mostRankedEntity->setUrl($mostPopular['html_url']);
            $mostRankedEntity->setDescription($mostPopular['description']);
            $mostRankedEntity->setStars(0);
            
            $em1->persist($mostRankedEntity);
            $em1->flush();
        }
        
        return $this->render('GOLRepositoriesBundle:Default:more-collaborators.html.twig', array(
            'mostCollaborators' => $mostCollaborators,
        ));
    }
}
