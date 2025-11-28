<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert extends Component
{
    public $type;
    public $message;

    public function __construct($type = 'info', $message = null)
    {
        $this->type = $type;
        $this->message = $message;
    }

    public function render()
    {
        return view('components.alert');
    }

    public function alertClass()
    {
        switch ($this->type) {
            case 'success': return 'alert alert-success';
            case 'danger':
            case 'error': return 'alert alert-danger';
            case 'warning': return 'alert alert-warning';
            default: return 'alert alert-info';
        }
    }
}
