<?php 
class Cms5b272d991130a116990613_44ef4ce327e0b497686e97f13bd071d1Class extends Cms\Classes\PageCode
{
public function onPagePosts()
{
    $this->blogPosts->setProperty('pageNumber', post('page'));
    $this->pageCycle();
}
}
