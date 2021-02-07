<div class="team" id="team">
    <div class="container">
        <div class="default-heading">
            <!-- heading -->
            <h2>Executing Team</h2>
        </div>
        <div class="row">

            @foreach($teams as $member)
                <div class="col-md-3 col-sm-3">
                    <!-- team member -->
                    <div class="member">
                        <!-- images -->
                        <img class="img-responsive" src="http://via.placeholder.com/400?text=Team Member"
                             alt="Team Member"/>
                        <!-- heading -->
                        <h3>{{$member->name}}</h3>
                        <!-- designation -->
                        <span class="dig">{{$member->role}}</span>
                        <!-- email -->
                        <a href="#">{{$member->email}}</a>
                    </div>
                </div>
            @endforeach

            {{--<div class="col-md-3 col-sm-3">
                <!-- team member -->
                <div class="member">
                    <!-- images -->
                    <img class="img-responsive" src="img/team/2.jpg" alt="Team Member" />
                    <!-- heading -->
                    <h3>Adam Miser</h3>
                    <!-- designation -->
                    <span class="dig">CEO</span>
                    <!-- email -->
                    <a href="#">executive.member@bloger.com</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <!-- team member -->
                <div class="member">
                    <!-- images -->
                    <img class="img-responsive" src="img/team/1.jpg" alt="Team Member" />
                    <!-- heading -->
                    <h3>Adam Miser</h3>
                    <!-- designation -->
                    <span class="dig">CEO</span>
                    <!-- email -->
                    <a href="#">executive.member@bloger.com</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-3">
                <!-- team member -->
                <div class="member">
                    <!-- images -->
                    <img class="img-responsive" src="img/team/2.jpg" alt="Team Member" />
                    <!-- heading -->
                    <h3>Adam Miser</h3>
                    <!-- designation -->
                    <span class="dig">CEO</span>
                    <!-- email -->
                    <a href="#">executive.member@bloger.com</a>
                </div>
            </div>--}}
        </div>

    </div>
</div>
