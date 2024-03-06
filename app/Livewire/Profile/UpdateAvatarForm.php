<?php

namespace App\Livewire\Profile;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Storage;

class UpdateAvatarForm extends Component
{
    use WithFileUploads;

    public $avatar;
    // public $user;

    public function saveAvatar()
    {
        $this->validate(['avatar' => 'image|mimes:png,jpg|max:5120',]);
        $extension = $this->avatar->getClientOriginalExtension();

        if (auth()->user()->avatar != "https://ui-avatars.com/api/?name=John+Doe&color=7F9CF5&background=EBF4FF" or auth()->user()->avatar != null){
            Storage::disk('public')->delete('avatars/' . auth()->user()->avatar);
        }
        $path = $this->avatar->storeAs('avatars', 'avatar-' . auth()->user()->id . '.' . $extension, 'public');    
        // auth()->user()->avatar = $path;

        $user=Auth::user();
        $user->avatar = $path;
        $user->save();
        
        // auth()->user()->save();

        $this->dispatch('updated-avatar');
    }


    public function render()
    {
        return view('livewire.profile.update-avatar-form');
    }
}
