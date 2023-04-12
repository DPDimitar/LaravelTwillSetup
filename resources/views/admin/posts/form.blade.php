@extends('twill::layouts.form')

@section('contentFields')

    @formField('input', [
    'name' => 'title',
    'label' => 'Title',
    'translated' => true,
    'maxlength' => 100
    ])

    @formField('input', [
    'name' => 'subtitle',
    'label' => 'Subtitle',
    'translated' => true,
    'maxlength' => 100
    ])

    @formField('wysiwyg', [
    'translated' => true,
    'name' => 'description',
    'label' => 'Description',
    'toolbarOptions' => [
    ['header' => [2, 3, 4, 5, 6, false]],
    'bold',
    'italic',
    'underline',
    'strike',
    ["script" => "super"],
    ["script" => "sub"],
    "blockquote",
    "code-block",
    ['list' => 'ordered'],
    ['list' => 'bullet'],
    ['indent' => '-1'],
    ['indent' => '+1'],
    ["align" => []],
    ["direction" => "rtl"],
    'link',
    "clean",
    ],
    'placeholder' => 'Case study text',
    'maxlength' => 200,
    'editSource' => true,
    'note' => 'Hint message`',
    ])

    @formField('medias', [
    'name' => 'post_image',
    'label' => 'Cover image',
    'note' => 'Also used in listings',
    'fieldNote' => 'Minimum image width: 1500px'
    ])

@stop
