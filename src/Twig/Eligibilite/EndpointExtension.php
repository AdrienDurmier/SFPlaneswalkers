<?php 
namespace App\Twig\Eligibilite;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class EndpointExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('endpoint_ref_type', [$this, 'endpointRefType']),
        ];
    }

    public function endpointRefType($endpoint)
    {
        $response = '';
        switch ($endpoint) {
            case "line_number":
                $response = "Cuivre";
                break;
            case "otp":
                $response =  "Fibre";
                break;
        }
        return $response;
    }
}
