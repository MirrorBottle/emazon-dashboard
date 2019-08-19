new class User {
	constructor() {
		this.userView = $('div#userView')[0];
		this.userViewButtons = $('button').filter((i, button) => {
			return button.id.match(/user[A-Z].+/);
		});

		this.setToProfileView();
	}

	setToProfileView() {
		this.userViewButtons.map((i, button) => {
			button.addEventListener('click', e => {
				if (e.target.id === 'userProfile') {
					this.userView.innerHTML = '';
					this.userView.innerHTML = `
                        <div class="row pl-3">
                            <div class="col-md-6 mb-4 mb-md-0">
                                <h4>About</h4>
                                <div class="row my-2">
                                    <div class="col-3">Phone</div>
                                    <div class="col-3">0895339906176</div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-3">Email</div>
                                    <div class="col-3">novilfreon@gmail.com</div>
                                </div>
                                <div class="row my-2">
                                    <div class="col-3">Website</div>
                                    <div class="col-3"><a href="#">novilfahlevy.xyz</a></div>
                                </div>
                                <div class="row my-3">
                                    <div class="col-12">Social Media</div>
                                    <div class="pl-0 col-5 col-md-4 d-flex justify-content-around mt-1">
                                        <span class="fas fa-instagram"></span>
                                        <span class="fas fa-github"></span>
                                        <span class="fas fa-facebook-square"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4 mb-md-0">
                                <h4>Last Activity</h4>
                                <p class="my-2 text-muted"><u>Upload a photo 2 days ago.</u></p>
                                <p class="my-2 text-muted"><u>Change photo profile 3 days ago.</u></p>
                                <p class="my-2 text-muted"><u>Change his name 3 hours ago.</u></p>
                            </div>
                        </div>
                    `;

                    this.userViewButtons[1].classList.remove('btn-primary');
                    this.userViewButtons[1].classList.add('btn-secondary');

                    e.target.classList.remove('btn-secondary');
                    e.target.classList.add('btn-primary');
				}
                else {
                    this.userView.innerHTML = '';
					this.userView.innerHTML = `
                        <form class="mb-3" method="post" enctype="multipart/form-data">
                            <h3 class="my-4">Edit Profile</h3>

                            <div class="form-row">
                                <div class="form-group col">
                                    <input type="text" class="form-control" id="name" placeholder="Name">
                                    <span class="text-small text-danger ml-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, qui.</span>
                                </div>
                            </div>

                            <div class="form-row mb-4">
                                <div class="form-group col-md-6">
                                    <input type="password" class="form-control" id="password" placeholder="Password">
                                    <span class="text-small text-danger ml-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, qui.</span>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
                                    <span class="text-small text-danger ml-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, qui.</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                <span class="text-small text-danger ml-1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, qui.</span>
                            </div>

                            <div class="form-row ml-1">
                                <div class="form-group">
                                    <label for="photoProfile">Photo Profile</label>
                                    <input type="file" class="form-control-file" id="photoProfile">
                                    <span class="text-small text-danger">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, qui.</span>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary ml-1">Sign in</button>
                        </form>
                    `;

                    this.userViewButtons[0].classList.remove('btn-primary');
                    this.userViewButtons[0].classList.add('btn-secondary');

                    e.target.classList.remove('btn-secondary');
                    e.target.classList.add('btn-primary');
                }
			});
		})
	}
}
