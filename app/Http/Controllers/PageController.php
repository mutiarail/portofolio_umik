<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function weddingIndex()
    {
        return view('pages.wedding');
    }

    public function lamaran()
    {
        return view('pages.lamaran');
    }

    public function team()
    {
        return view('pages.team');
    }

    public function venue(string $venue)
    {
        $allowed = ['al-azar', 'atyasa', 'golden', 'km7', 'pusri', 'santika', 'soma', 'taciro', 'thesultan', 'thezuri'];
        abort_unless(in_array($venue, $allowed, true), 404);
        return view("wedding.$venue");
    }

    public function gallery(string $slug)
    {
        $allowed = ['adelia-and-shobir', 'ajeng-and-aidil', 'alinda-and-ahmad', 'anisa-and-doni', 'anggun-and-alno', 'ara-and-farhan', 'aulia-and-ais', 'aurel-and-juanda', 'ayu-and-ralan', 'bagas-and-zafira', 'bella-and-farhan', 'chika-and-arif', 'desti-and-ramar', 'dhiya-and-rapi', 'dinda-and-heri', 'eca-and-bobbi', 'fira-and-rizki', 'firhan-and-dina', 'fitri-and-randi', 'iren-and-wahyu', 'jefa-and-dayat', 'lingga-and-tigih', 'lisbet-and-arie', 'mely-and-dina', 'messy-and-aldi', 'mia-and-firli', 'monica-and-tomi', 'naura-and-heri', 'nebo-and-lika', 'nila-and-erlangga', 'nisa-and-johanes', 'nora-and-rahmat', 'raka-and-monica', 'refo-and-fadillah', 'rere-and-salman', 'rizki-and-tania', 'tiara-and-riski', 'tita-and-arie', 'fitri-and-indra', 'naila-and-raihan', 'rosita-and-yuda', 'indira-and-nayaka'];
        abort_unless(in_array($slug, $allowed, true), 404);
        return view("gallery.$slug");
    }
}
