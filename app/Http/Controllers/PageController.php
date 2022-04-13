<?php

namespace App\Http\Controllers;

use App\Models\TableVars;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public $menu;

    public function __construct()
    {
        $this->menu = ['menu'=> [
            ['link' => '#', 'title' => 'About Us'],
            ['link' => '#', 'title' => 'Pricing'],
            ['link' => '#', 'title' => 'FAQ']
        ]];
    }

    public function index()
    {

        $data = [
            'banner_src' => asset('/img/header/cameron-venti-1-cq-icr-wfqbi-unsplash-copy.jpg'),
            'menu' => $this->menu
        ];

        return view("welcome", $data);
    }

    public function request()
    {

        $data = [
            'banner_src_request' => asset('/img/header/banner-request.png'),
            'banner_src_check' => asset('/img/header/banner-check.png'),
            'menu' => $this->menu
        ];

        return view("pages.request", $data);
    }
    public function requestData()
    {
        $total_size = 0;
        $total_weight = 0;
        foreach (request('products') as $item) {
            if(!$item['totalVolume']) {
                $total_size += ($item['singleCartonDimensions']['size1']/100 * $item['singleCartonDimensions']['size2']/100 * $item['singleCartonDimensions']['size3']/100) * $item['numCartons'];
                $total_weight += $item['cartonWeight'] * $item['numCartons']/1000;
            } else {
                $total_size += $item['totalVolume'];
                $total_weight += $item['totalWeight'];
            }
        }
        $total_size = round($total_size, 2);
        $total_weight = round($total_weight, 2);
        $w_m = max([$total_size, $total_weight]);



        $pre_carriage = TableVars::where('slug', 'pre_carriage')->value('value');
        $thc_origin = TableVars::where('slug', 'thc_origin')->value('value');
        $customs_clearance_origin = TableVars::where('slug', 'customs_clearance_origin')->value('value');
        $buy_export_license = TableVars::where('slug', 'buy_export_license')->value('value');
        $documentation = TableVars::where('slug', 'documentation')->value('value');
        $entry_summary_declaration = TableVars::where('slug', 'entry_summary_declaration')->value('value');

        $exw_charges = $pre_carriage + $thc_origin + $customs_clearance_origin + $buy_export_license + $documentation + $entry_summary_declaration;
        $fca_charges = $thc_origin + $customs_clearance_origin + $buy_export_license + $documentation + $entry_summary_declaration;

        $oceanfreight = TableVars::where('slug', 'oceanfreight')->value('value');
        $local_charges_destination = TableVars::where('slug', 'local_charges_destination')->value('value');
        $importhandling = TableVars::where('slug', 'importhandling')->value('value');
        $customs_clearance_destination = TableVars::where('slug', 'customs_clearance_destination')->value('value');
        $extra_tax_numbers = TableVars::where('slug', 'extra_tax_numbers')->value('value');
        $customs_duties = 0;
        $eust = round(request('valueOfGoods') * 1.27 - request('valueOfGoods'), 2);
        $aval_fee = round(($customs_duties + $eust) * 0.05, 2);

        $insurance = round((request('valueOfGoods') + $exw_charges + $oceanfreight + $customs_duties)*.75, 2);
        if($insurance <= 45) $insurance = 45;

        $cif = ($local_charges_destination + $local_charges_destination*.05) + $importhandling + $customs_clearance_destination + $extra_tax_numbers + $customs_duties + $eust + $aval_fee;

        $req = [
            'val_goods' => request('valueOfGoods'),
            'products' => request('products'),
            'insurance' => $insurance
        ];
        return $req;
    }

    public function check1()
    {

        $data = [
            'banner_src' => asset('/img/header/banner-check.png'),
            'menu' => $this->menu
        ];

        return view("pages.check1", $data);
    }
    public function check2()
    {

        $data = [
            'banner_src' => asset('/img/header/banner-check.png'),
            'menu' => $this->menu
        ];

        return view("pages.check2", $data);
    }
    public function accept()
    {

        $data = [
            'banner_src' => asset('/img/header/banner-check.png'),
            'menu' => $this->menu
        ];

        return view("pages.accept", $data);
    }



}
