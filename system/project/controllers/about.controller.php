<?php

//information about company
$infomartion = new view('about/information');

//team members
$members = new view('about/members');

//page
$page_layout = new view('about/page_layout');
$page_layout->infomartion = $infomartion;
$page_layout->members = $members;

//sets the title of the page
presenter::setTitle('About us');

//give the layout to the presenter
presenter::present($page_layout);
