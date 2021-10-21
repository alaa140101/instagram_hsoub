<?php

namespace App\Http\Livewire;

use Livewire\Component;
// use App\Models\User;

class Filters extends Component
{
    public $post_caption;
    public $image_path;

    public $filter1 = "./storage/uploads/1.jpeg";
    public $filter2 = "./storage/uploads/2.jpeg";
    public $filter3 = "./storage/uploads/3.jpeg";
    public $filter4 = "./storage/uploads/4.jpeg";
    public $filter5 = "./storage/uploads/5.jpeg";
    public $filter6 = "./storage/uploads/6.jpeg";
    public $filter7 = "./storage/uploads/7.jpeg";
    public $filter8 = "./storage/uploads/8.jpeg";
    public $filter9 = "./storage/uploads/9.jpeg";
    public $filter10 = "./storage/uploads/10.jpeg";
    public $filter11 = "./storage/uploads/11.jpeg";
    public $filter12 = "./storage/uploads/12.jpeg";
    public $filter13 = "./storage/uploads/13.jpeg";

    public function mount($post_caption, $image_path)
    {
        $this->post_caption = $post_caption;
        $this->image_path = $image_path;

        $this->correctImageOrientation($this->image_path, IMG_FILTER_NEGATE, $this->filter1, null, null, null, null, 0);
        $this->correctImageOrientation($this->image_path, IMG_FILTER_GRAYSCALE, $this->filter2, null, null, null, null, 0);
        $this->correctImageOrientation($this->image_path, IMG_FILTER_EMBOSS, $this->filter3, 20, null, null, null, 1);
        $this->correctImageOrientation($this->image_path, IMG_FILTER_GAUSSIAN_BLUR, $this->filter4, 40, null, null, null, 1);
        $this->correctImageOrientation($this->image_path, IMG_FILTER_EDGEDETECT, $this->filter5, 20, 40, 0, null, 3);
        $this->correctImageOrientation($this->image_path, IMG_FILTER_SELECTIVE_BLUR, $this->filter6, null, null, null, null, 0);
        $this->correctImageOrientation($this->image_path, IMG_FILTER_MEAN_REMOVAL, $this->filter7, null, null, null, null, 0);
        $this->correctImageOrientation($this->image_path, IMG_FILTER_COLORIZE, $this->filter8, 100, 50, 0, null, 3);
        $this->correctImageOrientation($this->image_path, IMG_FILTER_CONTRAST, $this->filter9, 20, null, null, null, 1);
        $this->correctImageOrientation($this->image_path, IMG_FILTER_SMOOTH, $this->filter10, 80, null, null, null, 1);
        $this->correctImageOrientation($this->image_path, IMG_FILTER_SMOOTH, $this->filter11, 20, null, null, null, 1);
        $this->correctImageOrientation($this->image_path, IMG_FILTER_PIXELATE, $this->filter12, 50, true, null, null, 2);
        $this->correctImageOrientation($this->image_path, IMG_FILTER_CONTRAST, $this->filter13, 80, null, null, null, 1);
    }

    public function applyFilter($num) {
        switch ($num) {
            case 0:
            break;
            case 1:
                rename($this->filter1, "storage/".$this->image_path);
            break;
            case 2:
                rename($this->filter2, "storage/".$this->image_path);
            break;
            case 3:
                rename($this->filter3, "storage/".$this->image_path);
            break;
            case 4:
                rename($this->filter4, "storage/".$this->image_path);
            break;
            case 5:
                rename($this->filter5, "storage/".$this->image_path);
            break;
            case 6:
                rename($this->filter6, "storage/".$this->image_path);
            break;
            case 7:
                rename($this->filter7, "storage/".$this->image_path);
            break;
            case 8:
                rename($this->filter8, "storage/".$this->image_path);
            break;
            case 9:
                rename($this->filter9, "storage/".$this->image_path);
            break;
            case 10:
                rename($this->filter10, "storage/".$this->image_path);
            break;
            case 11:
                rename($this->filter11, "storage/".$this->image_path);
            break;
            case 12:
                rename($this->filter12, "storage/".$this->image_path);
            break;
            case 13:
                rename($this->filter13, "storage/".$this->image_path);
            break;
        }
        auth()->user()->posts()->create([
            'post_caption' => $this->post_caption,
            'image_path' => $this->image_path,
        ]);
        return redirect()->route('user_profile', ['username' => auth()->user()->username]);
    }

    public function render()
    {
        return view('livewire.filters');
    }

    public function correctImageOrientation($imagePath, $effect, $newImagePath, $arg1, $arg2, $arg3, $arg4, $argnum)
    {
        $img = imagecreatefromstring(file_get_contents("storage/".$imagePath));
        if(@exif_read_data("storage/".$imagePath)){
            $exif = @exif_read_data("storage/".$imagePath);
            if($exif && isset($exif['Orientation'])){
                $orientation = $exif['Orientation'];
                if($orientation != 1){
                    $deg = 0;
                    // orientation
                    switch ($orientation) {
                        case 3:
                            $deg = 180;
                            $img = imagerotate($img, $deg, 0);
                            break;
                        case 6:
                            $deg = 270;
                            $img = imagerotate($img, $deg, 0);
                            break;
                        case 8:
                            $deg = 90;
                            $img = imagerotate($img, $deg, 0);
                            break;
                        default:
                            $img = imagerotate($img, $deg, 0);
                            break;
                    }

                    //filter
                    switch ($argnum){
                        case '0':
                            imagefilter($img, $effect);
                            break;
                        case '1':
                            imagefilter($img, $effect, $arg1);
                            break;
                        case '2':
                            imagefilter($img, $effect, $arg1, $arg2);
                            break;
                        case '3':
                            imagefilter($img, $effect, $arg1, $arg2, $arg3);
                            break;
                        case '4':
                            imagefilter($img, $effect, $arg1, $arg2, $arg3, $arg4);
                            break;
                    }

                    imagejpeg($img, $newImagePath, 100);
                    imagedestroy($img);
                }
            }
            else{
                //filter
                switch ($argnum){
                   case '0':
                       imagefilter($img, $effect);
                       break;
                   case '1':
                       imagefilter($img, $effect, $arg1);
                       break;
                   case '2':
                       imagefilter($img, $effect, $arg1, $arg2);
                       break;
                   case '3':
                       imagefilter($img, $effect, $arg1, $arg2, $arg3);
                       break;
                   case '4':
                       imagefilter($img, $effect, $arg1, $arg2, $arg3, $arg4);
                       break;
               }

               imagejpeg($img, $newImagePath, 100);
               imagedestroy($img);

               }
            }
            else{
             //filter
             switch ($argnum){
                case '0':
                    imagefilter($img, $effect);
                    break;
                case '1':
                    imagefilter($img, $effect, $arg1);
                    break;
                case '2':
                    imagefilter($img, $effect, $arg1, $arg2);
                    break;
                case '3':
                    imagefilter($img, $effect, $arg1, $arg2, $arg3);
                    break;
                case '4':
                    imagefilter($img, $effect, $arg1, $arg2, $arg3, $arg4);
                    break;
            }

            imagejpeg($img, $newImagePath, 100);
            imagedestroy($img);

            }
    }

}
