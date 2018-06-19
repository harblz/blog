<?php 
class Cms5b285a92dd4a9446137683_c3599eea016c34cc21bc655f0f35596aClass extends Cms\Classes\PageCode
{
public function onEnd()
{
    if ($this->post) {
        $this->page->title = $this->post->title;
    }
    else {
        return Redirect::to($this->pageUrl('404'));
    }
}
}
