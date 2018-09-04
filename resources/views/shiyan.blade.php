@extends('admin.index')
@section('left')
<section id='content'>
<div class='container-fluid'>
<div class='row-fluid' id='content-wrapper'>
<div class='span12'>
<div class='row-fluid'>
    <div class='span12'>
        <div class='page-header'>
            <h1 class='pull-left'>
                <i class='icon-list-ul'></i>
                <span>File trees</span>
            </h1>
            <div class='pull-right'>
                <ul class='breadcrumb'>
                    <li>
                        <a href="index.html"><i class='icon-bar-chart'></i>
                        </a>
                    </li>
                    <li class='separator'>
                        <i class='icon-angle-right'></i>
                    </li>
                    <li>Components</li>
                    <li class='separator'>
                        <i class='icon-angle-right'></i>
                    </li>
                    <li class='active'>File trees</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class='row-fluid'>
    <div class='span6 box'>
        <div class='box-header'>
            <div class='title'>Default</div>
            <div class='actions'>
                <a href="#" class="btn box-remove btn-mini btn-link"><i class='icon-remove'></i>
                </a>
                <a href="#" class="btn box-collapse btn-mini btn-link"><i></i>
                </a>
            </div>
        </div>
        <div class='box-content'>
            <div id="tree1"><ul id='tree1-treeData'>
                <li id='tree1id1' title='Look, a tool tip!'>
                    item1 with key and tooltip
                </li>
                <li id='tree1id2'>
                    item2
                </li>
                <li class='folder' id='tree1id3'>
                    Folder with some children
                    <ul>
                        <li id='tree1id2.1'>
                            Sub-item 3.1
                            <ul>
                                <li id='tree1id3.1.1'>
                                    Sub-item 3.1.1
                                </li>
                                <li id='tree1id3.1.2'>
                                    Sub-item 3.1.2
                                </li>
                            </ul>
                        </li>
                        <li id='tree1id3.2'>
                            Sub-item 3.2
                            <ul>
                                <li id='tree1id3.2.1'>
                                    Sub-item 3.2.1
                                </li>
                                <li id='tree1id3.2.2'>
                                    Sub-item 3.2.2
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class='expanded' id='tree1id4'>
                    Document with some children (expanded on init)
                    <ul>
                        <li id='tree1id4.1'>
                            Sub-item 4.1 (active and focus on init)
                            <ul>
                                <li id='tree1id4.1.1'>
                                    Sub-item 4.1.1
                                </li>
                                <li id='tree1id4.1.2'>
                                    Sub-item 4.1.2
                                </li>
                            </ul>
                        </li>
                        <li id='tree1id4.2'>
                            Sub-item 4.2
                            <ul>
                                <li id='tree1id4.2.1'>
                                    Sub-item 4.2.1
                                </li>
                                <li id='tree1id4.2.2'>
                                    Sub-item 4.2.2
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            </div>
        </div>
    </div>
    <div class='span6 box'>
        <div class='box-header'>
            <div class='title'>Drag & Drop</div>
            <div class='actions'>
                <a href="#" class="btn box-remove btn-mini btn-link"><i class='icon-remove'></i>
                </a>
                <a href="#" class="btn box-collapse btn-mini btn-link"><i></i>
                </a>
            </div>
        </div>
        <div class='box-content'>
            <div id="tree3"><ul id='tree3-treeData'>
                <li id='tree3id1' title='Look, a tool tip!'>
                    item1 with key and tooltip
                </li>
                <li id='tree3id2'>
                    item2
                </li>
                <li class='folder' id='tree3id3'>
                    Folder with some children
                    <ul>
                        <li id='tree3id2.1'>
                            Sub-item 3.1
                            <ul>
                                <li id='tree3id3.1.1'>
                                    Sub-item 3.1.1
                                </li>
                                <li id='tree3id3.1.2'>
                                    Sub-item 3.1.2
                                </li>
                            </ul>
                        </li>
                        <li id='tree3id3.2'>
                            Sub-item 3.2
                            <ul>
                                <li id='tree3id3.2.1'>
                                    Sub-item 3.2.1
                                </li>
                                <li id='tree3id3.2.2'>
                                    Sub-item 3.2.2
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class='expanded' id='tree3id4'>
                    Document with some children (expanded on init)
                    <ul>
                        <li id='tree3id4.1'>
                            Sub-item 4.1 (active and focus on init)
                            <ul>
                                <li id='tree3id4.1.1'>
                                    Sub-item 4.1.1
                                </li>
                                <li id='tree3id4.1.2'>
                                    Sub-item 4.1.2
                                </li>
                            </ul>
                        </li>
                        <li id='tree3id4.2'>
                            Sub-item 4.2
                            <ul>
                                <li id='tree3id4.2.1'>
                                    Sub-item 4.2.1
                                </li>
                                <li id='tree3id4.2.2'>
                                    Sub-item 4.2.2
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            </div>
        </div>
    </div>
</div>
<div class='row-fluid'>
    <div class='span12 box'>
        <div class='box-header'>
            <div class='title'>With checkboxes</div>
            <div class='actions'>
                <a href="#" class="btn box-remove btn-mini btn-link"><i class='icon-remove'></i>
                </a>
                <a href="#" class="btn box-collapse btn-mini btn-link"><i></i>
                </a>
            </div>
        </div>
        <div class='box-content'>
            <div id="tree2"><ul id='tree2-treeData'>
                <li id='tree2id1' title='Look, a tool tip!'>
                    item1 with key and tooltip
                </li>
                <li id='tree2id2'>
                    item2
                </li>
                <li class='folder' id='tree2id3'>
                    Folder with some children
                    <ul>
                        <li id='tree2id2.1'>
                            Sub-item 3.1
                            <ul>
                                <li id='tree2id3.1.1'>
                                    Sub-item 3.1.1
                                </li>
                                <li id='tree2id3.1.2'>
                                    Sub-item 3.1.2
                                </li>
                            </ul>
                        </li>
                        <li id='tree2id3.2'>
                            Sub-item 3.2
                            <ul>
                                <li id='tree2id3.2.1'>
                                    Sub-item 3.2.1
                                </li>
                                <li id='tree2id3.2.2'>
                                    Sub-item 3.2.2
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class='expanded' id='tree2id4'>
                    Document with some children (expanded on init)
                    <ul>
                        <li id='tree2id4.1'>
                            Sub-item 4.1 (active and focus on init)
                            <ul>
                                <li id='tree2id4.1.1'>
                                    Sub-item 4.1.1
                                </li>
                                <li id='tree2id4.1.2'>
                                    Sub-item 4.1.2
                                </li>
                            </ul>
                        </li>
                        <li id='tree2id4.2'>
                            Sub-item 4.2
                            <ul>
                                <li id='tree2id4.2.1'>
                                    Sub-item 4.2.1
                                </li>
                                <li id='tree2id4.2.2'>
                                    Sub-item 4.2.2
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
            </div>
            <hr class='hr-normal' />
            <strong style='margin-bottom:10px'>Log</strong>
            <div id='echoSelection2'></div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</section>
</div>
@endsection
