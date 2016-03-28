<?php if(!defined('KIRBY')) exit ?>

title: Post
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
  date:
    label: Date
    type: date
    default: today
  tags:
    label: Tags
    type:  tags
  categories:
    label: Categories
    type:  tags