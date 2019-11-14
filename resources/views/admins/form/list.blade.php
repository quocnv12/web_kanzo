@extends('admins.layout.master')

@section('title')
Danh Sách Người Dùng
@endsection

@section('content')
<div class="row-fluid">
    <div class="span12">
        <div class="grid simple ">
            <div class="grid-body ">
                <table class="table table-hover table-condensed" id="example">
                    <thead>
                        <tr>
                            <th style="width:1%">
                                <div class="checkbox check-default" style="margin-right:auto;margin-left:auto;">
                                    <input type="checkbox" value="1" id="checkbox1">
                                    <label for="checkbox1"></label>
                                </div>
                            </th>
                            <th style="width:10%">Project Name</th>
                            <th style="width:22%" data-hide="phone,tablet">Description</th>
                            <th style="width:6%">Price</th>
                            <th style="width:10%" data-hide="phone,tablet">Progress</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="v-align-middle">
                                <div class="checkbox check-default">
                                    <input type="checkbox" value="3" id="checkbox2">
                                    <label for="checkbox2"></label>
                                </div>
                            </td>
                            <td class="v-align-middle">Early Bird</td>
                            <td class="v-align-middle"><span class="muted">Redesign project template</span></td>
                            <td><span class="muted">$4,500</span></td>
                            <td class="v-align-middle">
                                <div class="progress ">
                                    <div data-percentage="80%"
                                        class="progress-bar progress-bar-success animate-progress-bar"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkbox check-default">
                                    <input type="checkbox" value="3" id="checkbox3">
                                    <label for="checkbox3"></label>
                                </div>
                            </td>
                            <td>Angry Birds&nbsp;&nbsp;&nbsp;<span class="label label-important">ALERT!</span></td>
                            <td><span class="muted">Something goes here</span></td>
                            <td><span class="muted">$9,000</span></td>
                            <td>
                                <div class="progress">
                                    <div data-percentage="70%"
                                        class="progress-bar progress-bar-danger animate-progress-bar"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkbox check-default">
                                    <input type="checkbox" value="3" id="checkbox4">
                                    <label for="checkbox4"></label>
                                </div>
                            </td>
                            <td>PHP Login page</td>
                            <td class="v-align-middle"><span class="muted">A project in business and science is
                                    typically defined</span></td>
                            <td><span class="muted">$5,400</span></td>
                            <td>
                                <div class="progress progress-info">
                                    <div data-percentage="60%"
                                        class="progress-bar progress-bar-primary animate-progress-bar"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkbox check-default">
                                    <input type="checkbox" value="3" id="checkbox5">
                                    <label for="checkbox5"></label>
                                </div>
                            </td>
                            <td>Zombies</td>
                            <td class="v-align-middle"><span class="muted">frequently involving research or
                                    design</span></td>
                            <td><span class="muted">$6,000</span></td>
                            <td>
                                <div class="progress">
                                    <div data-percentage="60%"
                                        class="progress-bar progress-bar-warning animate-progress-bar"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkbox check-default">
                                    <input type="checkbox" value="3" id="checkbox6">
                                    <label for="checkbox6"></label>
                                </div>
                            </td>
                            <td>Zombies</td>
                            <td class="v-align-middle"><span class="muted">frequently involving research or
                                    design</span></td>
                            <td><span class="muted">$6,000</span></td>
                            <td>
                                <div class="progress ">
                                    <div data-percentage="42%"
                                        class="progress-bar progress-bar-warning animate-progress-bar"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkbox check-default">
                                    <input type="checkbox" value="3" id="checkbox20">
                                    <label for="checkbox20"></label>
                                </div>
                            </td>
                            <td>Zombies</td>
                            <td class="v-align-middle"><span class="muted">frequently involving research or
                                    design</span></td>
                            <td><span class="muted">$6,000</span></td>
                            <td>
                                <div class="progress progress-warning">
                                    <div data-percentage="42%"
                                        class="progress-bar progress-bar-warning animate-progress-bar"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkbox check-default">
                                    <input type="checkbox" value="3" id="checkbox7">
                                    <label for="checkbox7"></label>
                                </div>
                            </td>
                            <td>Zombies</td>
                            <td class="v-align-middle"><span class="muted">frequently involving research or
                                    design</span></td>
                            <td><span class="muted">$6,000</span></td>
                            <td>
                                <div class="progress ">
                                    <div data-percentage="42%"
                                        class="progress-bar progress-bar-warning animate-progress-bar"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkbox check-default">
                                    <input type="checkbox" value="3" id="checkbox8">
                                    <label for="checkbox8"></label>
                                </div>
                            </td>
                            <td>Zombies</td>
                            <td class="v-align-middle"><span class="muted">frequently involving research or
                                    design</span></td>
                            <td><span class="muted">$6,000</span></td>
                            <td>
                                <div class="progress ">
                                    <div data-percentage="42%"
                                        class="progress-bar progress-bar-warning animate-progress-bar"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkbox check-default">
                                    <input type="checkbox" value="3" id="checkbox9">
                                    <label for="checkbox9"></label>
                                </div>
                            </td>
                            <td>Zombies</td>
                            <td class="v-align-middle"><span class="muted">frequently involving research or
                                    design</span></td>
                            <td><span class="muted">$6,000</span></td>
                            <td>
                                <div class="progress ">
                                    <div data-percentage="42%"
                                        class="progress-bar progress-bar-warning animate-progress-bar"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkbox check-default">
                                    <input type="checkbox" value="3" id="checkbox10">
                                    <label for="checkbox10"></label>
                                </div>
                            </td>
                            <td>Zombies</td>
                            <td class="v-align-middle"><span class="muted">frequently involving research or
                                    design</span></td>
                            <td><span class="muted">$6,000</span></td>
                            <td>
                                <div class="progress ">
                                    <div data-percentage="42%"
                                        class="progress-bar progress-bar-warning animate-progress-bar"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkbox check-default">
                                    <input type="checkbox" value="3" id="checkbox11">
                                    <label for="checkbox11"></label>
                                </div>
                            </td>
                            <td>Zombies</td>
                            <td class="v-align-middle"><span class="muted">frequently involving research or
                                    design</span></td>
                            <td><span class="muted">$6,000</span></td>
                            <td>
                                <div class="progress ">
                                    <div data-percentage="42%"
                                        class="progress-bar progress-bar-warning animate-progress-bar"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkbox check-default">
                                    <input type="checkbox" value="3" id="checkbox12">
                                    <label for="checkbox12"></label>
                                </div>
                            </td>
                            <td>Zombies</td>
                            <td class="v-align-middle"><span class="muted">frequently involving research or
                                    design</span></td>
                            <td><span class="muted">$6,000</span></td>
                            <td>
                                <div class="progress ">
                                    <div data-percentage="42%"
                                        class="progress-bar progress-bar-warning animate-progress-bar"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkbox check-default">
                                    <input type="checkbox" value="3" id="checkbox13">
                                    <label for="checkbox13"></label>
                                </div>
                            </td>
                            <td>Zombies</td>
                            <td class="v-align-middle"><span class="muted">frequently involving research or
                                    design</span></td>
                            <td><span class="muted">$6,000</span></td>
                            <td>
                                <div class="progress ">
                                    <div data-percentage="42%"
                                        class="progress-bar progress-bar-warning animate-progress-bar"></div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="checkbox check-default">
                                    <input type="checkbox" value="3" id="checkbox14">
                                    <label for="checkbox14"></label>
                                </div>
                            </td>
                            <td>Zombies</td>
                            <td class="v-align-middle"><span class="muted">frequently involving research or
                                    design</span></td>
                            <td><span class="muted">$6,000</span></td>
                            <td>
                                <div class="progress ">
                                    <div data-percentage="42%"
                                        class="progress-bar progress-bar-warning animate-progress-bar"></div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
@section('script')
<script src="admin-template/assets/plugins/jquery/jquery-1.11.3.min.js" type="text/javascript"></script>
<script src="admin-template/assets/plugins/bootstrapv3/js/bootstrap.min.js" type="text/javascript"></script>
<script src="admin-template/assets/plugins/jquery-block-ui/jqueryblockui.min.js" type="text/javascript"></script>
<script src="admin-template/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="admin-template/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js" type="text/javascript"></script>
<script src="admin-template/assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<script src="admin-template/assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="admin-template/assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<!-- END CORE JS DEPENDECENCIES-->
<!-- BEGIN CORE TEMPLATE JS -->
<script src="admin-template/webarch/js/webarch.js" type="text/javascript"></script>
<script src="admin-template/assets/js/chat.js" type="text/javascript"></script>

<script src="admin-template/assets/js/dashboard_v2.js" type="text/javascript"></script>
<script src="admin-template/assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<script src="admin-template/assets/plugins/jquery-datatable/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="admin-template/assets/plugins/jquery-datatable/extra/js/dataTables.tableTools.min.js" type="text/javascript"></script>
<script type="text/javascript" src="admin-template/assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
<script type="text/javascript" src="admin-template/assets/plugins/datatables-responsive/js/lodash.min.js"></script>
<script src="admin-template/assets/js/datatables.js" type="text/javascript"></script>    
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<!-- BEGIN JS DEPENDECENCIES-->
@endsection
