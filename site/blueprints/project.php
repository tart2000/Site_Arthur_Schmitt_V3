<?php if(!defined('KIRBY')) exit ?>

title: Project
pages: false
files:
  sortable: true
fields:
  title:
    label: Title
    type:  text
  baseline: 
    label: Baseline
    type: text
  with: 
    label: Credits
    type: text
    width: 1/2
  paged: 
    label: Paged?
    type: toggle
    text: yes/no
    width: 1/2
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