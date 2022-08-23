<?php

namespace App\Http\Livewire\Modal;

use App\Models\Alumni;
use App\Models\Announcement;
use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Delete extends Component
{
    public $deletedId = '', $entity = '';
    protected $listeners = [
        'delete-admin' => 'deleteAdmin',
        'delete-alumni' => 'deleteAlumni',
        'delete-job' => 'deleteJob',
        'delete-announcement' => 'deleteAnnouncement',
    ];
    public function render()
    {
        return view('livewire.modal.delete');
    }
    public function deleteAdmin($id)
    {
        $this->deletedId = $id;
        $this->entity = 'admin';
    }
    public function deleteAlumni($id)
    {
        $this->deletedId = $id;
        $this->entity = 'alumni';
    }
    public function deleteJob($id)
    {
        $this->deletedId = $id;
        $this->entity = 'job';
    }
    public function deleteAnnouncement($id)
    {
        $this->deletedId = $id;
        $this->entity = 'announcement';
    }
    public function confirm()
    {
        if($this->entity == 'admin'){
            $user = User::findOrFail($this->deletedId);
            if($user->image){
                Storage::disk('public')->delete(str_replace('public/', '', $user->image));
            }
            $user->delete();
            $this->emit('adminDeleted');
            $this->dispatchBrowserEvent('alert',[
                'type'=>'success',
                'message'=>"Admin deleted successfully"
            ]);
        }elseif($this->entity == 'alumni'){
            $alumni = Alumni::findOrFail($this->deletedId);
            if($alumni->image){
                Storage::disk('public')->delete(str_replace('public/', '', $alumni->image));
            }
            $alumni->delete();
            $this->emit('alumniDeleted');
            $this->dispatchBrowserEvent('alert',[
                'type'=>'success',
                'message'=>"Alumni deleted successfully"
            ]);
        }elseif($this->entity == 'job'){
            $job = Job::findOrFail($this->deletedId);
            if($job->image){
                Storage::disk('public')->delete(str_replace('public/', '', $job->image));
            }
            $job->delete();
            $this->emit('jobDeleted');
            $this->dispatchBrowserEvent('alert',[
                'type'=>'success',
                'message'=>"Job deleted successfully"
            ]);
        }elseif($this->entity == 'announcement'){
            $announcement = Announcement::findOrFail($this->deletedId);
            if($announcement->image){
                Storage::disk('public')->delete(str_replace('public/', '', $announcement->image));
            }
            $announcement->delete();
            $this->emit('announcementDeleted');
            $this->dispatchBrowserEvent('alert',[
                'type'=>'success',
                'message'=>"Announcement deleted successfully"
            ]);
        }
    }
}
