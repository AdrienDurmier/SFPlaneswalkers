<?php 
namespace App\Twig\Planeswalkers;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class LegalityExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('legality', [$this, 'displayLegality']),
        ];
    }

    public function displayLegality($card)
    {
        $response = '';
        switch ($card) {
            case "not_legal":
                $response = "badge-danger";
                break;
            case "legal":
                $response =  "badge-success";
                break;
        }
        return $response;
    }
}
