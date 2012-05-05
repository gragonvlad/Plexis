<div class="grid_12">

    <!-- Button -->
    <div>
        <a id="create" href="javascript:void(0);" class="button">Create New Group</a>
    </div>

    <div class="block-border" id="tab-panel-1">
        <div class="block-header">
            <h1>User Groups</h1>
            <ul class="tabs">
                <li><a href="#tab-1">User Groups</a></li>
                <li><a href="#tab-2">Custom Permissions</a></li>
            </ul>
        </div>
        <div class="block-content tab-container">
        
            <!-- User Groups -->
            <div id="tab-1" class="tab-content">
                <div id="js_message" style="display: none;"></div>
                <table id="groups" class="table">
                    <thead>
                        <tr>
                            <th>Group Id</th>
                            <th>Group Title</th>
                            <th>Group Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
            
            <!-- Permissions -->
            <div id="tab-2" class="tab-content">
                <p><div class="alert info">Sorry, i havent started this yet!</div></p>
            </div>
            
        </div>
    </div>
</div>

<!-- Hidden Create form -->
<div id="groups-modal">
    <div id="js_groups_message"></div>
    <form id="groups-form" class="form" action="{SITE_URL}/ajax/groups" method="post">
        <input id="formtype" type="hidden" name="action" value="create">
        <input id="groupid" type="hidden" name="id" value="0">
        <div class="_100">
            <p>
                <label for="title">Group Title</label>
                <input id="title" name="title" type="text" value="" />
            </p>
            
            <p>
                <label for="grouptype">Group Category</label>
                <select id="grouptype" name="group_type">
                    <option value="0">Banned</option>
                    <option value="1">Guest</option>
                    <option value="2">Member</option>
                    <option value="3">Admin</option>
                </select>
            </p>

            <div>
                <input id="submit" type="submit" class="button" style="width: 150px; text-align: center; margin: 10px; float: right;" value="Submit">
            </div>
        </div>
    </form>
</div>