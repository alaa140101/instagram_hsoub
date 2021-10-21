<?php

namespace App\Http\Livewire;

use Livewire\Component;
// use App\Models\User;

class Filters extends Component
{
    public $post_caption;
    public $image_path;

    public function mount($post_caption, $image_path)
    {
        $this->post_caption = $post_caption;
        $this->image_path = $image_path;

        $img = imagecreatefromstring(file_get_contents("storage/".$this->image_path));
        imagefilter($img, IMG_FILTER_NEGATE);
        imagejpeg($img, "./storage/uploads/1.jpeg", 100);
    }

    public function applyFilter($num) {
        switch ($num) {
            case 0:
                auth()->user()->posts()->create([
                    'post_caption' => $this->post_caption,
                    'image_path' => $this->image_path,
                ]);
                break;
                case 1:
                    rename("./storage/uploads/1.jpeg", "storage/".$this->image_path);
                    auth()->user()->posts()->create([
                        'post_caption' => $this->post_caption,
                        'image_path' => $this->image_path,
                    ]);
                    break;
        }
        return redirect()->route('user_profile', ['username' => auth()->user()->username]);
    }

    public function render()
    {
        return view('livewire.filters');
    }
}
