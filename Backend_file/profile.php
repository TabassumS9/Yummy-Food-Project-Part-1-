<?php
include "./backend_inc/header.php"
?>
<div class="container-fluid">
    <h2>Profile Page</h2>
    <div class="row">
        <div class="col-lg-8 shadow p-3 round">
            <div class="card">
            <form action="">
                <div class="row">
                    <div class="col-lg-4">
                        <label for="profile-img" style="width: 100%;" ><img class="profile_img" style="width: 230px; height: 220px; object-fit:cover;" src="https://api.dicebear.com/7.x/initials/svg?seed=<?=$_SESSION['auth']['Fname']?>" alt=""></label>
                        <input type="file" id="profile-img" class="profile_selector d-none" >
                    </div>
                    <div class="col-lg-8">
                        <input value="<?=$_SESSION['auth']['Fname']?>" class="form-control my-3" type="text" placeholder="First Name">
                        <input value="<?=$_SESSION['auth']['Lname']?>" class="form-control my-3" type="text" placeholder="Last Name">
                        <input value="<?=$_SESSION['auth']['Email']?>" class="form-control my-3" type="text" placeholder="Email address">
                        <button class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card shadow p-3 round">
            <form action="">
                <input class="form-control my-3" type="text" placeholder="Old Password">
                <input class="form-control my-3" type="text" placeholder="New Password">
                <input class="form-control my-3" type="text" placeholder="confirm Password">
                <button class="btn btn-primary w-100" >Update</button>
            </form>
            </div>
        </div>
    </div>
</div>
<?php
include "./backend_inc/footer.php"
?>

<script>
    let profileInput = document.querySelector('.profile_selector')
    let profileImage = document.querySelector('.profile_img')

    function updateImage(event){
        let url = URL.createObjectURL(event.target.files[0]);
        profileImage.src = url
        console.log(url);
    }
    profileInput.addEventListener('change',updateImage) 
</script>