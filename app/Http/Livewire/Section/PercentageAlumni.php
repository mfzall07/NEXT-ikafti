<?php

namespace App\Http\Livewire\Section;

use App\Models\Alumni;
use Livewire\Component;

class PercentageAlumni extends Component
{
    public function render()
    {
        $chart1 = Alumni::whereBetween('generation', ['1987', '1996'])->count();
        $chart2 = Alumni::whereBetween('generation', ['1997', '2006'])->count();
        $chart3 = Alumni::whereBetween('generation', ['2007', '2016'])->count();
        $chart4 = Alumni::whereBetween('generation', ['2017', '2018'])->count();
        $total= Alumni::count();
        return view('livewire.section.percentage-alumni', compact('chart1', 'chart2', 'chart3', 'chart4', 'total'));
    }
}
