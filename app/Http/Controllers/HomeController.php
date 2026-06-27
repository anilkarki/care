<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = $this->getServices();
        $whyChooseUs = $this->getWhyChooseUs();
        $whoWeServe = $this->getWhoWeServe();
        return view('home', compact('services', 'whyChooseUs', 'whoWeServe'));
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        $inHomeServices = $this->getInHomeServices();
        $retirementServices = $this->getRetirementServices();
        return view('services', compact('inHomeServices', 'retirementServices'));
    }

    public function contact()
    {
        return view('contact');
    }

    private function getServices(): array
    {
        return [
            ['icon' => 'fas fa-heartbeat', 'title' => 'Disease Specific Caregiving', 'desc' => 'Expert care tailored to specific chronic conditions and diagnoses.'],
            ['icon' => 'fas fa-brain', 'title' => 'Dementia & Brain Wellness', 'desc' => 'Specialized memory care and cognitive wellness activities.'],
            ['icon' => 'fas fa-pills', 'title' => 'Medication Management', 'desc' => 'Reminding and managing medications to ensure proper adherence.'],
            ['icon' => 'fas fa-hands-helping', 'title' => 'Personal Care Assistance', 'desc' => 'Hygiene, grooming, and daily living support with dignity.'],
            ['icon' => 'fas fa-car', 'title' => 'Escort to Appointments', 'desc' => 'Reliable transportation to medical and social appointments.'],
            ['icon' => 'fas fa-home', 'title' => 'Home Making', 'desc' => 'Light housekeeping, laundry, and meal preparation services.'],
        ];
    }

    private function getWhyChooseUs(): array
    {
        return [
            ['icon' => 'fas fa-clock', 'title' => 'No Minimum Hours', 'desc' => 'Complete flexibility with no minimum hour requirements — only the hours you need.'],
            ['icon' => 'fas fa-dollar-sign', 'title' => 'Customizable Pricing', 'desc' => 'Choose your hourly rate and payment plan to fit your financial planning.'],
            ['icon' => 'fas fa-user-check', 'title' => 'Caregiver Selection', 'desc' => 'Empower you to choose your preferred caregiver for compatibility and trust.'],
            ['icon' => 'fas fa-shield-alt', 'title' => 'Transparent Screening', 'desc' => 'Full access to background checks, drug screenings, and credentials.'],
            ['icon' => 'fas fa-clipboard-list', 'title' => 'Collaborative Care Planning', 'desc' => 'Actively participate in developing your care plan, coordinated with healthcare providers.'],
        ];
    }

    private function getWhoWeServe(): array
    {
        return [
            ['icon' => 'fas fa-user-tie', 'title' => 'Retired Executives & Aging Professionals', 'desc' => 'Customized care that reflects your lifestyle and expectations of excellence.'],
            ['icon' => 'fas fa-briefcase', 'title' => 'Busy Families', 'desc' => 'Respite care allowing you to balance demanding careers while your loved ones receive top-tier care.'],
            ['icon' => 'fas fa-stethoscope', 'title' => 'Chronic Illness Management', 'desc' => 'Expert assistance managing medications and chronic conditions.'],
            ['icon' => 'fas fa-walking', 'title' => 'Movement Disorder Patients', 'desc' => 'Specialized, ongoing care to keep you as active and functional as possible.'],
            ['icon' => 'fas fa-map-marker-alt', 'title' => 'Long-Distance Family Caregivers', 'desc' => 'Reliable professional assistance navigating elder care and retirement living.'],
        ];
    }

    private function getInHomeServices(): array
    {
        return [
            'Concierge services',
            'Disease specific caregiving',
            'Dementia care & brain wellness activities',
            'Escort to medical and social appointments',
            'Home making',
            'Hygiene and grooming assistance',
            'Long distance family caregiver support',
            'Medication reminding and management',
            'Patient education',
            'Personal care assistance',
            'Post hospital, post rehabilitation care',
            'Restorative therapy',
        ];
    }

    private function getRetirementServices(): array
    {
        return [
            'Small segments of care to promote independence and a sense of wellbeing',
            'Private & additional care inside of assisted living communities',
            'Onboarding services to enhance a smooth transition from one level of care to another',
            'Restorative therapy aide service to improve balance and mobility',
            'Supportive living services to promote aging in place',
        ];
    }
}
