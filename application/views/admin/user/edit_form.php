<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?php echo site_url("admin/user")?>">User</a></li>
                            <li class="breadcrumb-item active"><?php echo $title?></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                
                            </div>
                            <div class="card-body">
                            <form action="<?php echo site_url('admin/user/Save')?>"method="post">
                            <div class="mb-3">
                                <label for="username"> USERNAME</label>
                                <input type="text" class="form-control" name="id" request value="<?=$user->id;?>"/>
                                <input type="text" class="form-control" name="username" placeholder="USERNAME" request value="<?=$user->username;?>"/>
                            </div>
                            <div class="mb-3">
                                <label for="full name"> FULL NAME</label>
                                <input type="text" class="form-control" name="full name" placeholder="USERNAME" request value="<?=$user->full_name;?>"/>
                            </div>
                            <div class="mb-3">
                                <label for="phone"> PHONE
                                <input type="text" class="form-control" name="phone" placeholder="PHONE" request value="<?=$user->phone;?>"/>
                            </div>
                            <div class="mb-3">
                                <label for="email"> EMAIL</label>
                                <input type="text" class="form-control" name="email" placeholder="EMAIL" request value="<?=$user->email;?>"/>
                            </div>
                            <div class="mb-3">
                                <label for="ROLE"> ROLE</label>
                                <select name="role" id="role" class="form-select" required>
                                <option value="admin">ADMIN</option>
                                <option value="sekretaris">SEKRETARIS</option>
                                </select>
                        </div>

                        <button class="btn btn-primary" type="submit"><i class="fas fa-plus"></i>EDIT</button>
                        <div style="height: 100vh"></div>
                    </form>
                    </div>
                </main>