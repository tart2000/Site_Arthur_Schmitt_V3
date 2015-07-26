<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  text:
    label: Text
    type:  textarea
  videoLink: 
    label: Video link
    type: Url 
    width: 1/2
  externalLink:
    label: External link 
    type: Url
    width: 1/2
  downLink: 
    label: Download link
    type: Url 
    width: 1/2
  forkLink: 
    label: Fork 
    type: Url
    width: 1/2