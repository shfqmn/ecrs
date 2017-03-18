<?php
/**
 * Licensed under The GPL-3.0 License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @since    2.0.0
 * @author   Christopher Castro <chris@quickapps.es>
 * @link     http://www.quickappscms.org
 * @license  http://opensource.org/licenses/gpl-3.0.html GPL-3.0 License
 */
?>
    <!DOCTYPE html>
    <html>

    <head>
        <?= $this->Html->charset() ?>

            <title>
                <?= $this->fetch('title') ?>- eCRS</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="initial-scale=1.0">
            <title>Announcement View</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="initial-scale=1.0">
            <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
            <!-- Latest compiled and minified CSS -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
            <!-- Optional theme -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
            <!-- Latest compiled and minified JavaScript -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js" integrity="sha256-Gn7MUQono8LUxTfRA0WZzJgTua52Udm1Ifrk5421zkA=" crossorigin="anonymous"></script>
            <!-- Bootstrap DatePicker -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css" integrity="sha256-5ad0JyXou2Iz0pLxE+pMd3k/PliXbkc65CO5mavx8s8=" crossorigin="anonymous" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker3.min.css" integrity="sha256-nFp4rgCvFsMQweFQwabbKfjrBwlaebbLkE29VFR0K40=" crossorigin="anonymous" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js" integrity="sha256-urCxMaTtyuE8UK5XeVYuQbm/MhnXflqZ/B9AOkyTguo=" crossorigin="anonymous"></script>
            <!-- Bootstrap DateTimePicker -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" integrity="sha256-yMjaV542P+q1RnH6XByCPDfUFhmOafWbeLPmqKh11zo=" crossorigin="anonymous" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha256-5YmaxAwMjIpMrVlK84Y/+NjCpKnFYa8bWWBbUHSBGfU=" crossorigin="anonymous"></script>
            <?= $this->fetch('meta') ?>
                <?= $this->fetch('css') ?>
                    <?= $this->fetch('script') ?>
                        <style>
                            .container {
                                padding-bottom: 30px;
                            }

                        </style>
    </head>

    <body>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-brand" href="#">eCRS</a> </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <?php if(is_null($this->request->session()->read('Auth.User.role'))): ?>
                        <ul class="nav navbar-nav">
                            <li>
                                <?= $this->Html->link('Home',['plugin'=>false,'controller'=>'Announcements','action'=>'index']) ?>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?= $this->Url->build(['plugin'=>'CakeDC/Users','controller'=>'Users','action'=>'register']) ?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                            <li><a href="<?= $this->Url->build(['plugin'=>'CakeDC/Users','controller'=>'Users','action'=>'login']) ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>
                        <?php elseif($this->request->session()->read('Auth.User.role') == "crs"): ?>
                            <ul class="nav navbar-nav">
                                <li>
                                    <?= $this->Html->link('Home',['plugin'=>false,'controller'=>'Announcements','action'=>'index']) ?>
                                </li>
                                <li>
                                    <?= $this->Html->link('View Reports',['plugin'=>false,'controller'=>'Report','action'=>'index']) ?>
                                </li>
                                <li>
                                    <?= $this->Html->link('Submit Monthly Report',['plugin'=>false,'controller'=>'Report','action'=>'add']) ?>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= $this->request->session()->read('Auth.User.username'); ?><span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?= $this->Url->build(['plugin'=>'CakeDC/Users','controller'=>'Users','action'=>'profile']) ?>"><span class="glyphicon glyphicon-user"></span>View profile</a></li>
                                        <li>
                                            <?= $this->Html->link(__d('CakeDC/Users', 'Change Password'), ['plugin' => 'CakeDC/Users', 'controller' => 'Users', 'action' => 'changePassword']); ?>
                                        </li>
                                        <li>
                                            <?= $this->Html->link(__d('CakeDC/Users', 'Update Profile'), ['plugin' => 'CakeDC/Users', 'controller' => 'Users', 'action' => 'edit']); ?>
                                        </li>
                                        <li><a href="<?= $this->Url->build(['plugin'=>'CakeDC/Users','controller'=>'Users','action'=>'logout']) ?>"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <?php elseif($this->request->session()->read('Auth.User.role') == "cmu"): ?>
                                <ul class="nav navbar-nav">
                                    <li><a href="<?= $this->Url->build(['plugin'=>false,'controller'=>'Announcements','action'=>'index']) ?>">Home</a></li>
                                    <li><a href="<?= $this->Url->build(['plugin'=>'CakeDC/Users','controller'=>'Users','action'=>'approve']) ?>">Approve CRS </a></li>
                                    <li><a href="<?= $this->Url->build(['plugin'=>false,'controller'=>'Report','action'=>'approve']) ?>">Approve Monthly Report</a></li>
                                    <li><a href="<?= $this->Url->build(['plugin'=>'CakeDC/Users','controller'=>'Users','action'=>'add']) ?>">Add CMU</a></li>
                                    <li><a href="<?= $this->Url->build(['plugin'=>false,'controller'=>'Announcements','action'=>'all']) ?>">Edit Announcements</a></li>
                                    <li><a href="<?= $this->Url->build(['plugin'=>false,'controller'=>'Announcements','action'=>'add']) ?>">Add Announcements</a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?= $this->request->session()->read('Auth.User.username'); ?><span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?= $this->Url->build(['plugin'=>'CakeDC/Users','controller'=>'Users','action'=>'profile']) ?>"><span class="glyphicon glyphicon-user"></span>View profile</a></li>
                                            <li>
                                                <?= $this->Html->link(__d('CakeDC/Users', 'Change Password'), ['plugin' => 'CakeDC/Users', 'controller' => 'Users', 'action' => 'changePassword']); ?>
                                            </li>
                                            <li>
                                                <?= $this->Html->link(__d('CakeDC/Users', 'Update Profile'), ['plugin' => 'CakeDC/Users', 'controller' => 'Users', 'action' => 'edit']); ?>
                                            </li>
                                            <li><a href="<?= $this->Url->build(['plugin'=>'CakeDC/Users','controller'=>'Users','action'=>'logout']) ?>"><span class="glyphicon glyphicon-log-out"></span>Logout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <?php endif; ?>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php echo $this->Flash->render(); ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <?php echo $this->fetch('content'); ?>
                </div>
            </div>
        </div>
    </body>

    </html>
