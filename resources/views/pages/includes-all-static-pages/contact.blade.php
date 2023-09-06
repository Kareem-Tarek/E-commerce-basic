@extends('layouts.master')

@section('title', 'Contact Us')

<style>
.contact-container{
    margin-top: 5.5%;
    margin-bottom: 2%;
}
</style>

@section("main")
<div class="conatiner contact-container">
    <div class="text-center">
        <h3 class="text-primary">How Can We Help You?</h3>
        <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisic</p>
    </div>
    <div class=" d-flex align-items-center justify-content-center">
        <div class="bg-white col-md-4">
            <div class="p-4 rounded shadow-md">
                <div>
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="mt-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" name="email" class="form-control" placeholder="xxxxx@example.com" required>
                </div class="mt-3">
                <div class="mt-3">
                    <label for="phone" class="form-label">Your Phone</label>
                    <input type="text" name="Phone" class="form-control" placeholder="Your Phone" required>
                </div class="mt-3">
                <div class="mt-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                </div>
                <div class="mt-3 mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea name="message" cols="20" rows="6" class="form-control"
                        placeholder="message"></textarea>
                </div>
                <button class="btn btn-primary">
                    Submit Form
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
