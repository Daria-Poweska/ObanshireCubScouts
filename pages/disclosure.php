<?php
include '../account/config/config.php';
include '../partials/header.php';
include '../partials/navigation.php';
?>

<main class="aboutmain">
    <div class="top d-flex align-items-center" style="background-image: url('assets/Images/login.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center">
            <h2>Disclosure</h2>
        </div>
        <div class="bottom-bar d-flex align-items-center justify-content-center">
            <h3>Understanding Disclosure Process in Scotland</h3>
        </div>
    </div>
    <div class="container">
        <!-- Disclosure Process Section -->
        <div class="container my-4 bg-white p-4 rounded">
            <h3 class="mb-3">Understanding Disclosure in Scotland</h3>
            <p>In Scotland, certain roles within Scouts require a disclosure check. Here's what you need to know about the disclosure process:</p>

            <h4 class="mt-4">The PVG Scheme</h4>
            <p>The Protecting Vulnerable Groups (PVG) Scheme is crucial for ensuring safer appointment decisions. It allows only suitable individuals to work with vulnerable groups, including children.
                To find out more <a href="https://www.mygov.scot/disclosure-types?via=https://www.disclosurescotland.co.uk/">Click</a>
            </p>

            <h4 class="mt-4">Initiating a PVG Check</h4>
            <p>Once an adult is added to Compass, a PVG check can be initiated. The quickest and easiest way to do this is by completing the online PVG ID Checking Form. However, if you're unable to complete the form immediately, you can download the PVG ID Checking Form and complete it later when you have access to the internet.</p>
            <p>For the identity check, specific original documents are required, including documents that provide the applicant's full name (including any middle names), date of birth, and current residential address. At least one of the documents must be photographic.</p>

            <h4 class="mt-4">Types of PVG Applications</h4>
            <p>There are two types of PVG applications:</p>
            <ul>
                <li>‘Application to join the PVG Scheme’ – for individuals who have not previously undergone a PVG disclosure check.</li>
                <li>‘Existing PVG Scheme Member Application’ – for individuals who are already members of the PVG Scheme and have a 16-digit member number.</li>
            </ul>

            <h4 class="mt-4">Verification Process</h4>
            <p>Once the online form is submitted by the ID checker, a notification is sent to the District Appointments Secretary for verification. If all the information provided is accurate, the application is accepted and forwarded to the Safe Scouting Team. Otherwise, the application is rejected, and the ID checker is notified to rectify the incorrect information.</p>

            <h4 class="mt-4">Issuing of the PVG Disclosure</h4>
            <p>After the PVG disclosure certificate is issued by Disclosure Scotland, the Member Support Department at UKHQ informs either the relevant Commissioner or the local Appointment Secretary about the outcome. The volunteer’s membership record on Compass is updated accordingly. It's essential to understand that PVG disclosure checks are just one part of the National Vetting Process. Even after receiving the certificate, volunteers may not be able to start immediately.</p>
        </div>
    </div>

<?php
include '../partials/footer.php';
unset($_SESSION["error_message"]);
?>


