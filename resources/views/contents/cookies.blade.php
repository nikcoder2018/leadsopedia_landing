@extends('layouts.app')

@section('css')
<style>
    .large {
        font-size: 2rem;
    }

    p {
        justify-content: center;
    }

    li {
        margin-top: 0.75rem;
        margin-bottom: 0.75rem;
    }
</style>
@endsection

@section('content')
    <div class="container pb-5 my-5">
        <h1>COOKIES POLICY</h1>
        <h6>BY CONTINUING TO USE OUR SITE AND SERVICES, YOU ARE AGREEING TO THE USE OF COOKIES AND SIMILAR TECHNOLOGIES FOR THE PURPOSES WE DESCRIBE IN THIS COOKIES POLICY. IF YOU DO NOT ACCEPT THE USE OF COOKIES AND SIMILAR TECHNOLOGIES, DO NOT USE THIS SITE.</h6>
        <h6>Cookies</h6>
        <p>A cookie is a small text file that a website saves on your computer or mobile device when you visit the site. In general, cookies have two main purposes: to improve your browsing experience by remembering your actions and preferences and to help us analyze our website traffic.</p>
        <h6>What to do with Cookies?</h6>
        <p>We use cookies to help us analyze traffic to the Website, to help us improve website performance and usability, and to make the Website more secure. Third-party cookies help us use Google Analytics to count, track, and analyze visits to the Website. This helps us understand how people are using our websites and where we need to make improvements. These third-party cookies do not specifically identify you.</p>
        <h6>Types & Category of Cookies used</h6>
        <ul>
            <li>
                <h6>Authentication</h6>
                <p>
                    If you sign in to https://www.leadsopedia.com, cookies help us show users the right information and personalize the experience to the users.
                </p>
            </li>
            <li>
                <h6>Security</h6>
                <p>We use cookies to enable and support our security features, and to help us detect malicious activity violations of our <a href="{{ route('terms-and-conditions') }}">Terms and Conditions</a>.</p>
            </li>
            <li>
                <h6>Performance, Analytics, Research & Advertising</h6>
                <p>
                    Cookies help us learn how well our site and web products perform in different locations. We also use these to understand, improve, and research products, features, and services, including when you access this site https://www.leadsopedia.com from other websites, applications, or devices such as your work computer or your mobile device. We also use third-party cookies to improve and personalize our marketing messages/communications with you.
                </p>
            </li>
        </ul>
        <h6>Control cookies</h6>
        <p>You are always free to delete cookies that are already on your computer through your browser settings, and you can set most browsers to prevent them from being added to your computer. However, this may prevent you from using certain features on the Website.</p>
    </div>
@endsection
