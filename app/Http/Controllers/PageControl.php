<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\User;
use Illuminate\Http\Request;

class PageControl extends Controller
{
    private $NamaWebsite = "De Creative";
    private $Author = "Agung Dwi Sahputra";
    //funtion tampilan lading page
    public function landing_page()
    {
        // Data yang nantinya untuk tampilan Website
        $data = [
            'NamaWebsite' => $this->NamaWebsite,
            'author' => $this->Author,
            // Data dari database
            'portfolio' => Portfolio::all()
        ];

        return view('landing_page', compact(['data']));
    }

    // function tampilan login
    public function login()
    {
        // Data yang nantinya untuk tampilan Website
        $data = [
            'NamaWebsite' => $this->NamaWebsite,
            'author' => $this->Author,
            // Data dari database
            'DataUsers' => User::all()
        ];

        return view('admin.login', compact(['data']));
    }

    /* Tampilan Admin */
    public function AdminIndex()
    {
        // Data yang nantinya untuk tampilan Website
        $data = [
            'NamaWebsite' => $this->NamaWebsite,
            'author' => $this->Author,
            'page' => 'index'
        ];

        return view('admin.index', $data);
    }

    public function AdminPortfolio()
    {
        // Data yang nantinya untuk tampilan Website
        $data = [
            'NamaWebsite' => $this->NamaWebsite,
            'author' => $this->Author,
            'page' => 'portfolio',
            // Data dari database
            'portfolio' => Portfolio::all()
        ];

        return view('admin.portfolio', $data);
    }
    public function CreatePortfolio()
    {
        // Data yang nantinya untuk tampilan Website
        $data = [
            'NamaWebsite' => $this->NamaWebsite,
            'author' => $this->Author,
            'page' => 'portfolio',
        ];

        return view('admin.create_portfolio', $data);
    }
    public function UpdatePortfolio($id)
    {
        // Data yang nantinya untuk tampilan Website
        $data = [
            'NamaWebsite' => $this->NamaWebsite,
            'author' => $this->Author,
            'page' => 'portfolio',
            // Data dari database
            'portfolio' => Portfolio::findOrFail($id)
        ];

        return view('admin.update_portfolio', $data);
    }


    /* ================================= */

    // Tampilan INstagram Feed
    public function InstagramFeed()
    {
        // Data yang nantinya untuk tampilan Website
        $data = [
            'NamaWebsite' => $this->NamaWebsite,
            'author' => $this->Author,
            'page' => 'instagram Feed',
        ];

        return view('instagram-feed.index', $data);
    }
    public function InstagramFeed_karya()
    {
        // Data yang nantinya untuk tampilan Website
        $data = [
            'NamaWebsite' => $this->NamaWebsite,
            'author' => $this->Author,
            'page' => 'instagram Feed',
        ];

        return view('instagram-feed.karya', $data);
    }
}
