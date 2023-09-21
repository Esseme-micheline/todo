<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    public function boot()
    {
        $this->loadViewComponentsAs('my-prefix', [
            Textarea::class, // ou le chemin de votre composant textarea personnalisé
        ]);
    }
}
