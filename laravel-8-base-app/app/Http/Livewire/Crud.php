<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;

class Crud extends Component
{
    public $students, $name, $email, $mobile, $student_id;
    public $isModalOpen = 0;

    public function render()
    {
        $this->students = Student::all();
        return view('livewire.crud');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
        ]);

        Student::updateOrCreate(['id' => $this->student_id], [
            'name' => $this->name,
            'email' => $this->email,
            'mobile' => $this->mobile,
        ]);

        session()->flash('message', $this->student_id ? 'Student updated.' : 'Student created.');

        $this->closeModalPopover();
        $this->resetCreateForm();
    }

    public function closeModalPopover()
    {
        $this->isModalOpen = false;
    }

    private function resetCreateForm()
    {
        $this->name = '';
        $this->email = '';
        $this->mobile = '';
    }
}
