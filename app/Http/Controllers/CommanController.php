<?php

namespace App\Http\Controllers;

use App\Models\Comman;
use Illuminate\Http\Request;

class CommanController extends Controller
{    
	public function about()
	{
	   return view('about-us');
	}
	public function ourTeam()
	{
	   return view('team');
	}
	public function teamDetail()
	{
	   return view('teamdetail');
	}
	public function testiMonials()
	{
	   return view('testimonials');
	}
	public function pricing()
	{
	   return view('pricing');
	}
	public function ourPortfolio()
	{
	   return view('ourportfolio');
	}	
	public function portfolioDetails()
	{
	  return view('portfoliodetails');
	}
	public function faq()
	{
	   return view('faq');
	} 
	public function contact()
	{
	   return view('contact');
	} 	
	public function service()
	{
	   return view('service');
	} 
	public function serviceDetails()
	{
	   return view('servicedetails');
	}
	public function blog()
	{
	   return view('blog');
	} 	
	public function blogDetails()
	{
	   return view('blogdetails');
	} 
	public function blogSideber()
	{
	   return view('blogsideber');
	} 	
}
