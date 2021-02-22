<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>
<body>
    <a href="{{route('about')}}" style="position:absolute;font-size:40px;text-decoration: none;">🔙</a>
<section class="border p-4 d-flex justify-content-center mb-4">
      <form id="contact-form" class="text-center" style="width: 100%; max-width: 300px; height:80vh;">
        <h2>Contact us</h2>

        <!-- Name input -->
        <div class="form-outline mb-4">
          <input type="text" id="name" name="name" class="form-control">
          <label class="form-label" for="name" style="margin-left: 0px;">Name</label>
        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 42.4px;"></div><div class="form-notch-trailing"></div></div></div>

        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="email" id="email" name="email" class="form-control">
          <label class="form-label" for="email" style="margin-left: 0px;">Email address</label>
        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 88.8px;"></div><div class="form-notch-trailing"></div></div></div>

        <!-- Subject input -->
        <div class="form-outline mb-4">
          <input type="text" id="subject" name="subject" class="form-control">
          <label class="form-label" for="subject" style="margin-left: 0px;">Subject</label>
        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 50.4px;"></div><div class="form-notch-trailing"></div></div></div>

        <!-- Message input -->
        <div class="form-outline mb-4">
          <textarea class="form-control" id="message" name="message" rows="4"></textarea>
          <label class="form-label" for="message" style="margin-left: 0px;">Message</label>
        <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 60px;"></div><div class="form-notch-trailing"></div></div></div>

        <!-- Submit button -->
        <button class="btn btn-primary btn-block mb-4">Send</button>
      </form>
    </section>
</body>
</html>