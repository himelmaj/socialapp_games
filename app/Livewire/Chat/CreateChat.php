<?php

namespace App\Livewire\Chat;

use App\Models\User;
use App\Models\Conversation;
use App\Models\Message;
use Livewire\Component;

class CreateChat extends Component
{

    public $users;
    public $message = 'hello';


    public function check_conversation($receiver_id)
    {
        // dd($reciver_id);

        $checked_conversation = Conversation::where('sender_id', auth()
            ->user()->id)
            ->where('receiver_id', $receiver_id)
            ->orWhere('sender_id', $receiver_id)
            ->where('receiver_id', auth()->user()->id)
            ->get();

        if ($checked_conversation->count() <= 0) {
            // dd('no conversation');

            $checked_conversation = Conversation::create([
                'receiver_id' => $receiver_id,
                'sender_id' => auth()->user()->id,
                'last_time_message' => now(),
            ]);

            $created_message = Message::create([
                'conversation_id' => $checked_conversation->id,
                'sender_id' => auth()->user()->id,
                'receiver_id' => $receiver_id,
                'body' => "hello"
            ]);

            $checked_conversation->last_time_message = $created_message->created_at;
            $checked_conversation->save();
            dd($created_message);
            dd('saved');

        } elseif ($checked_conversation->count() > 0) {
            dd($checked_conversation);
        }

    }


    public function render()
    {
        $this->users = User::where('id', '!=', auth()->user()->id)->get();
        return view('livewire.chat.create-chat');
    }

}
