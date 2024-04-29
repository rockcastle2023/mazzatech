<?php

namespace Drupal\test_vote\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Drupal\node\Entity\Node;

class TestVoteController extends ControllerBase {
  public function handlePost(Request $request) {
    $content = json_decode($request->getContent(), TRUE);
    $nid_resp = $content['nid_resp'];
    $timestamp_resp = $content['timestamp_resp'];

    $node = Node::load($nid_resp);
    if ($node && $node->getType() == 'respostas') {
      $current_count = $node->get('field_contagem_votos')->value;
      $node->set('field_contagem_votos', $current_count + 1);
      $node->save();

      return new JsonResponse([
        'status' => 'success',
        'message' => 'Vote counted successfully!',
        'nid' => $nid_resp,
        'new_count' => $current_count + 1
      ]);
    }

    return new JsonResponse([
      'status' => 'error',
      'message' => 'Node not found or invalid type.'
    ]);
  }
}
