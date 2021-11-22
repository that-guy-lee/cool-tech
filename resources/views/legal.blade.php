@extends('layouts.layout');
@section('content');

<?php
   function pageName($ss)
   {
       if ($ss === 'tos') {
           return 'Terms of Service';
       } else {
           return 'Privacy Policy';
       }
   }
   
?>


@if($subsection==='tos')
<div class="content">
    <h1>Legal: {{pageName($subsection)}}</h1>
    <br>
    <p>Welcome to the network of interactive
        services provided by CBS Interactive Inc., its affiliates or its subsidiaries
        (collectively “CBS Interactive,” “us,” or “we”). These Terms of Use (“Terms”)
        govern your use of our websites, applications, and other products and services
        that include an authorized link to these Terms (collectively, the “Services”).Please review these Terms carefully
        before using the Services because they affect your rights.
        By using any of the Services, you accept these Terms and agree to be legally bound by them.
        Please consult our Privacy Policy for Information regarding our privacy practices.
        Certain Services are provided to you free of charge, while other Services,
        including Paramount+ and SportsLine, require payment before you can access them.
        If you choose to subscribe to a paid Service, please also review such Service’s Terms of Use.
        For example, if you subscribe to Paramount+, please review the Paramount+ Subscription Terms,
        in addition to all of the other provisions of these Terms.1. Changes
        These Terms are effective as of the Effective Date above.
        If you have not reviewed the Terms of Use applicable to a Service since the Effective Date,
        please review these updated Terms carefully before using any Service.
        We may change these Terms in the future, so we encourage you to review periodically the Terms of Use
        applicable to each Service you use.
        The most current version of the applicable Terms of Use
        (along with its effective date) will be linked from each of the Services.
        If you do not agree with any changes to these Terms, your sole remedy is not to use the Services.
        If you continue to use the Services after we change these Terms, you accept all changes.
        2. Disputes; ArbitrationIf you have any dispute with or claim against us or any of our affiliates,
        or if we have a dispute with or claim against you, in either case arising out of or relating to the
        Services or these Terms (a “Claim”), and the Claim is not resolved by calling our Customer Service department
        at (888) 274-5343, you and we each agree to attempt to resolve such Claim first through informal negotiation.
        If we do not resolve the Claim through informal negotiation, the Claim shall be resolved through binding
        arbitration or an individual action in small claims court in the U.S. county (or parish) of your
        residence or in San Francisco, California. If neither of us chooses to resolve the Claim in small
        claims court, or the small claims court determines that it lacks jurisdiction to resolve the Claim,
        the Claim must be resolved solely and exclusively by binding arbitration. Class arbitrations and
        class actions are not permitted under any circumstances. You and we agree that the U.S. Federal
        Arbitration Act governs the interpretation and enforcement of this provision, and that you and we
        are each waiving the right to a trial by jury or to participate in a class action or class arbitration.
        This Section 2 shall survive termination of these Terms or any subscription that you may have to
        any of the Services.Before you or we commence an arbitration or file a small claims court action
        with respect to a Claim, you must first send to CBS Interactive a written notice of your Claim or
        we must send a written notice of our Claim to you (“Notice”). Your Notice must (1) be sent
        by certified mail; (2) be addressed to: CBS Interactive, Attn: Legal Department, 235 Second Street,
        San Francisco, CA 94105; (3) describe the nature of your Claim; and (4) specify the damages or other
        relief you seek. If we and you do not then resolve the Claim within 30 days after you receive a
        Notice of Receipt of the Claim, either you or we may commence an arbitration or file a small
        claims court action to resolve the Claim.Any such arbitration shall be administered by the JAMS
        Mediation, Arbitration and ADR Services (“JAMS”) in accordance with the JAMS Comprehensive
        Arbitration Rules and Procedures, as modified by the JAMS Consumer Arbitration Minimum Standards
        (the “JAMS Rules”). Contact information for JAMS, as well as copies of the JAMS Rules and
        applicable forms, are available at http://www.jamsadr.com. In circumstances in which the
        JAMS Rules provide for an in-person hearing, such hearing will take place in the U.S.
        county (or parish) of your residence, or otherwise in San Francisco, California. Payment
        of the parties’ costs and fees owed to JAMS will be determined by the JAMS Rules and fee
        schedule, and will be subject to any limitations on the costs and fees owed by you under
        the JAMS Consumer Arbitration Minimum Standards. You and we agree that, under JAMS
        Comprehensive Rule 6(e), any arbitration commenced by you or by us shall be consolidated
        with any other arbitration(s) submitted to JAMS if and only if the arbitrations:
        (a) involve the same legal claims or causes of action; (b) involve common issues of
        fact and law; (c) were filed by the same attorney(s) or law firm; and (d) are at a
        similar procedural stage. However, class or representative arbitrations are not permitted under
        any circumstances.3. Additional TermsAdditional terms may apply to your use of certain Services.
        We will provide these terms to you or post them on the Services to which they apply, and they
        are incorporated by reference into these Terms. If there is a conflict between these Terms and
        any additional terms that apply to a particular Service, the additional terms will control.
        Sweepstakes, contests, and promotions on the Services may also have additional rules and
        eligibility requirements, such as certain age or geographic area restrictions. You are
        responsible for complying with these rules and requirements.4. Registration and Access ControlsIf
        we request registration information from you to set up a user account, you must provide us
        with accurate and complete information and must update the information when it changes.
        You may not access any age-restricted Services unless you are above the required age.
        You are responsible for maintaining the confidentiality of your user account login
        names and passwords, and must not permit use of your account by anyone other than members
        of your household. You accept responsibility for all activities, charges, and damages
        that occur under your account, including use of your account by other members of your
        household, and unauthorized use of your account. If you have reason to believe that
        someone is using your account without your permission, you should contact us immediately.
        We are not responsible for any loss or damage resulting from unauthorized use.5.
        Intellectual Property; LicenseThe audio and video materials, photographs, text,
        graphics, logos, layouts, designs, interfaces, software, data and other content
        associated with the Services (“Content”) are protected by intellectual property and other l
        aws in the U.S. and in other countries. You must comply with all such laws and
        applicable copyright, trademark or other legal notices or restrictions. You shall
        not remove or alter any copyright, trademark, or other legal notices marked on the
        Content. As between you and CBS Interactive, CBS Interactive will retain all right,
        title, and interest in and to the Services and the Content. No transfer of ownership
        to any portion of the Content shall be made as a result of any access you are granted.
        Except as specifically provided below, we reserve all rights to the Services and Content.
        You are only permitted to access and view the Content for personal, non-commercial purposes i
        n accordance with these Terms, and may not build a business or other enterprise utilizing any
        of the Content, whether for profit or not. Except as provided in Section 5(a) or otherwise expressly
        authorized by us in writing, you may not either directly or through the use of any software, device,
        internet site, web-based service or other means download, stream capture, store in a database, archive
        or otherwise copy any part of the Services or Content; upload, sell, rent, lease, lend, broadcast,
        transmit or otherwise disseminate, distribute, display or perform any part of the Services or Content;
        license or sublicense any part of the Services or Content; or in any way exploit any part of the Services
        or Content. In addition, except as provided in Section 5(a) or otherwise expressly authorized by us in
        writing, you are strictly prohibited from modifying Content; creating, distributing or advertising an
        index of any significant portion of the Content; or otherwise creating derivative works or materials that
        otherwise are derived from or based in any way on the Content, including mash-ups and similar videos,
        montages, translations, desktop themes, fonts, icons, wallpaper, greeting cards, and merchandise.
        This prohibition from creating derivative works is applicable even if you intend to give away the
        derivative material free of charge.Without limiting the foregoing, you may not modify, interfere
        with, enhance, remove, or otherwise alter in any way any portion of the CBS Interactive video
        player (the “Video Player”); any of the Video Player’s underlying technology; or any digital rights
        management mechanism, device, or other content protection or access control measure incorporated
        into the Video Player. This restriction includes, without limitation, disabling, modifying, reverse
        enables users to view Content without: (i) visibly displaying both the Video Player and all
        surrounding elements (including the graphical user interface, any advertising, copyright notices,
        nd trademarks) of the webpage where the Video Player is located; and (ii) having full access
        to all functionality of the Video Player, including, without limitation, all video quality and
        display functionality and all interactive, elective or click-through advertising functionality.a.
        Viral DistributionWe may expressly authorize you to redistribute certain Content on a personal,
        non-commercial basis. We will identify the Content that you are authorized to redistribute and
        describe ways you may redistribute it (such as via email, social media posts, blogs, or embedded
        players, or by producing Mash-Ups). We may revoke this authorization at any time. If you
        redistribute such Content, you must be able to edit or delete such publicly posted Content
        and you must edit or delete it promptly upon our request. When expressly authorized by us in
        writing, you may embed videos using the Video Player, provided you do not embed the Video Player
        on any website or other location that (i) contains or hosts content that is inappropriate, profane,
        vulgar, offensive, false, disparaging, defamatory, obscene, illegal, infringing, threatening, sexually
        explicit, racist, that promotes violence, racial hatred, or terrorism, or that we deem, in our sole
        discretion, to be otherwise objectionable or (ii) links to infringing or unauthorized content, or any
        content described in (i). You may not embed the Video Player into any hardware or software application,
        even for non-commercial purposes. As determined by us in our sole discretion, we reserve the right
        to prevent embedding to any website or other location that we find inappropriate or otherwise
        objectionable as determined by us in our sole discretion.Some Services may include “Mash-Up Tools”
        that allow you to manipulate Content or combine User Submissions (as defined in Section 6) with
        Content to create “Mash-Ups.” The following terms apply to your use of Mash-Up Tools, except as
        specifically provided in other terms accompanying the Mash-Up Tools:You may only use designated
        Content with the Mash-Up Tools, and we may revoke permission to use the designated Content at any
        time.You may manipulate or combine the designated Content using the Mash-Up Tools only as authorized
        and only for personal, non-commercial purposes.As between you and us, we own all compilation rights
        in the Mash-Ups and may make perpetual and unrestricted use of the Mash-Ups, and you will only retain
        whatever prior rights you had in your User Submissions.With our permission, other users of the
        Services may make subsequent Mash-Ups using your Mash-Ups.You must include any required or existing
        trademark, copyright or other legal notices in the Mash-Ups and you must comply with any other usage
        or attribution guidelines we provide.If we expressly allow you to do so, you may distribute Mash-Ups
        under the Viral Distribution guidelines above in Section 4(a) of these Terms.b. Commercial Licenses
        You must obtain our written permission for commercial use of the Content or the Services. If you wish
        to license Content from the Services, please contact us.c. Dated MaterialsContent offered through the
        Services or in links from the Services is dated as of the date originally issued or indicated on the
        Content and may no longer be accurate. We assume no obligation to update such Content.6. Legal Complaints
        We respect intellectual property rights. If you believe that Content on the Services infringes your
        copyright, please follow our procedures for making a copyright infringement claim. If you have a
        legal complaint other than a copyright claim, please follow our procedure for making other legal
        complaints.7. User SubmissionsSome of the Services may allow you to submit or transmit audio,
        video, text, or other materials, including so-called “user generated content” and “feedback”
        (collectively, “User Submissions”) to or through the Services. When you provide User Submissions,
        you grant to CBS Interactive and its affiliates and partners a non-exclusive, worldwide,
        royalty-free, perpetual, irrevocable, fully sublicenseable license to use, reproduce, archive,
        edit, translate, create derivative works of, make available, distribute, sell, display, perform,
        transmit, broadcast and in any other way exploit those User Submissions, and any names, voices,
        likenesses and other identifying information of persons that is part of those User Submissions,
        in any form, media, software, or technology of any kind now known or developed in the future, including,
        without limitation, for developing, manufacturing, and marketing products. You hereby waive
        any moral rights you may have in your User Submissions.We respect your ownership of User Submissions.
        If you owned a User Submission before providing it to us, you will continue owning it after providing i
        t to us, subject to any rights granted in these Terms and any access granted to others. Please note
        that if you delete a User Submission from the Services:The User Submission may still exist in
        our backup copies, which are not publicly available.If your User Submission was shared with third
        parties, those third parties may have retained copies of your User Submissions, and neither we nor
        our affiliates have any responsibility for any uses of your User Submission that they might make.We
        retain the license specified above. Thus, for example, if we or one of our sublicensees obtained
        your user Submission for use in creating a derivative work before you deleted it, we or our
        sublicensee would remain free to complete the creation of that derivative work and thereafter
        exploit that derivative work for all purposes and at all times.We may refuse or remove a User
        Submission without notice to you. However, we have no obligation to monitor User Submissions,
        and you agree that neither we nor our affiliates will be liable for User Submissions or any loss
        or damage resulting from User Submissions.We do not guarantee that User Submissions will be
        private, even if the User Submission is in a password-protected area. Accordingly, you should
        not provide User Submissions that you want protected from others.You bear all responsibility f
        or your User Submissions. You represent and warrant that you have all rights necessary to
        grant to CBS Interactive the license above and that your User Submissions do not violate
        Section 11.8. Subscription Terms for Paramount+ and Other Fee-Based ServicesIf you are a s
        ubscriber to Paramount+, additional subscription terms apply. Visit pplus.legal/subscription
        to review.If you are a subscriber to SportsLine, additional subscription terms apply. Visit
        https://cbsinteractive.com/legal/cbsi/sportsline/terms-of-use to review.
        If you are a subscriber to 247Sports, additional subscription terms apply.
        Visit https://cbsinteractive.com/legal/cbsi/terms-of-use/247sports to review.
        If you accept fee-based Services, you agree to the additional terms governing
        all such purchases as provided to you or posted on the Services to which they apply,
        including all requirements to pay applicable fees and taxes. Except as otherwise provided in such
        additional terms, the provisions of this Section 8 apply to such fee-based Services.Unless
        otherwise stated, all fees and charges are non-refundable, including for unused portions of
        cancelled subscriptions. We do not provide price protection or refunds in the event of a price
        drop or promotional offering.We reserve the right to change the pricing of all Services at any
        time. In the event of a price change, we will post the new pricing on the relevant Service and
        attempt to notify you by sending an email to the address you have registered. Billing for all
        mobile subscription services will be governed by the Mobile Features section of these Terms
        (Section 10) unless the terms of the subscription say otherwise.We may offer trial subscriptions
        o paid Services for free or at special discounted prices. Unless otherwise stated, these trial
        subscriptions will automatically become paying subscriptions at the current subscription rate
        if you do not cancel before the end of the trial period.9. Third-Party ContentWe may provide third
        rty content (including advertisements) or link to third party websites on the Services. We do not
        necessarily endorse or evaluate third party content and websites, and we do not assume responsibility
        r third parties’ actions or omissions. You should review third parties’ terms of use and privacy
        policies before you use their services. In certain instances, you may be able to connect and/or
        link your account to certain third party social media sites ("Social Media Sites"), including,
        without limitation, Facebook and Twitter. BY CONNECTING OR LINKING YOUR ACCOUNT TO ANY SOCIAL
        MEDIA SITE, YOU ACKNOWLEDGE AND AGREE THAT YOU ARE CONSENTING TO THE CONTINUOUS RELEASE OF
        INFORMATION ABOUT YOU TO OTHERS, INCLUDING TO THE SOCIAL MEDIA SITE (IN ACCORDANCE WITH YOUR
        PRIVACY SETTINGS ON SUCH SOCIAL MEDIA SITE). IF YOU DO NOT WANT INFORMATION ABOUT YOU TO BE
        SHARED IN THIS MANNER, DO NOT CONNECT OR LINK YOUR ACCOUNT TO ANY SOCIAL MEDIA SITE. Please
        see our Video Services and Social Networking Policy for additional information.10. Mobile FeaturesIn
        addition to the general terms applicable to the Services, the following terms apply to Services designed
        wireless devices (“Mobile Features”), which we offer only to users who are 18 years of age or older and
        located in the fifty U.S. states or the District of Columbia unless otherwise noted.Your wireless provider
        may charge for use of Mobile Features, including fees for receipt of text messages or data transmission.
        In order to receive Mobile Features, your wireless provider may require you to subscribe to additional
        services, which may require additional fees. These fees are not charged by us, and you should contact
        your wireless provider before you sign up for Mobile Features to determine what fees, if any, will be
        charged. In addition, you agree that we may arrange for Mobile Features billing through your wireless
        provider and that your wireless provider may invoice you for the applicable fees or deduct them from
        your pre-paid balance.You may not transfer or copy any Content from the wireless device on which you originally received Content to any other device, including, without limitation, any computer or another wireless device.To cancel a Mobile Feature that involves a subscription fee, you must follow the instructions included in the terms and conditions applicable to that Mobile Feature; otherwise, you will continue to incur subscription charges. If you stop a subscription-based Mobile Feature in the middle of a billing cycle, you will not receive a refund for that billing cycle.11. Acceptable UseWithout limiting any other provision in these Terms, you agree not to do the following, or assist others to do the following:Access the Services using any interface other than ours.Maintain any link to the Services that we ask you to remove, in our sole discretion.Frame the Services or Content, make the Services or Content available via in-line links, otherwise display the Services or Content in connection with an unauthorized logo or mark, or do anything that could falsely suggest a relationship between the CBS Interactive or its affiliates and any third party or potentially deprive us of revenue (including, without limitation, revenue from advertising, branding, or promotional activities).Threaten, defame, stalk, abuse, or harass other persons or engage in illegal activities, or encourage conduct that would constitute a criminal offense or give rise to civil liability.Transmit any material that is inappropriate, profane, vulgar, offensive, false, disparaging, defamatory, obscene, illegal, sexually explicit, racist, that promotes violence, racial hatred, or terrorism, or that we deem, in our sole discretion, to be otherwise objectionable.Violate any person’s or entity’s legal rights (including, without limitation, intellectual property, privacy, and publicity rights), transmit material that violates or circumvents such rights, or remove or alter intellectual property or other legal notices.Transmit files that contain viruses, spyware, adware, or other harmful code.Advertise or promote goods or services without our permission (including, without limitation, by sending unsolicited email).Interfere with others using the Services or otherwise disrupt the Services.Disassemble, decompile or otherwise reverse engineer any software or other technology included in the Content or used to provide the Services.Transmit, collect, or access personally identifiable information about other users without the consent of those users and CBS Interactive.Engage in unauthorized spidering, “scraping,” data mining or harvesting of Content, or use any other unauthorized automated means to gather data from or about the Services.Impersonate any person or entity or otherwise misrepresent your affiliation or the origin of materials you transmit.Remove, avoid, interfere with, or otherwise circumvent any access control measures for the Services or Content, including password-protected areas and geo-filtering mechanisms, or any digital rights management measures used in connection with Content.Access any portion of the Services that we have not authorized you to access (including password-protected areas), link to password-protected areas, attempt to access or use another user’s account or information, or allow anyone else to use your account or access credentials.If you violate this Section 11, we may terminate your access to the Services without notice, and take any other actions or seek any remedies permitted by law.12. Access to Services and AccountsWe may take any of the following actions in our sole discretion at any time, and without giving you prior notice:Change or discontinue the Services.Change how we offer and operate Services (e.g., to begin charging a fee to access features or Content that we previously made available without charge).Remove Content from the Services.Restrict, suspend or terminate your access to one or more Services or features thereof.Deactivate your accounts and delete all related information and files in your accounts.We will not be liable to you or any third party for taking any of these actions and we will not be limited to the remedies above if you violate these Terms. If we terminate your access to any of the Services, you must immediately stop using such Service. However, if you have paid for a subscription to Paramount+ or another paid Service, and we discontinue the Service before the end of a paid subscription period, or we terminate your account before the end of a paid subscription period for reasons other than your breach of these Terms, we will refund a prorated portion of the applicable subscription fee corresponding to the portion of the paid subscription period for which our action caused you not to have access to the relevant Service. If we terminate your access to Paramount+ or another paid Service because you breached these Terms, you will not be entitled to any refund.13. Unsolicited Submissions.We do not accept unsolicited submissions, including scripts, story lines, articles, fan fiction, characters, drawings, suggestions, ideas or concepts. It is our policy to delete any such submission without reading it. Any similarity between an unsolicited submission and any elements in any CBS creative work would be purely coincidental.14. IndemnificationYou will defend, indemnify and hold harmless CBS Interactive, its affiliates, and their respective directors, officers, employees, shareholders, vendors, partners, contractors, agents, licensors or other representatives and all of their successors and assigns (collectively, the “CBS Interactive Parties”) with respect to all third party claims, costs (including attorney’s fees and costs), damages, liabilities, and expenses or obligations of any kind, arising out of or in connection with your use or misuse of the Services (including, without limitation use of your account, whether or not authorized by you, and claims arising from User Submissions). CBS Interactive retains the right to assume the exclusive defense and control of any claim subject to indemnification, and in such cases you agree to cooperate with us to defend such claim. You may not settle any claim covered by this Section 14 without CBS Interactive’s prior written approval.15. Disclaimers; Limitation of LiabilityTHE CBS INTERACTIVE PARTIES DO NOT WARRANT: (1) THAT THE SERVICES, ANY OF THE SERVICES’ FUNCTIONS OR ANY CONTENT WILL BE UNINTERRUPTED OR FREE OF ERRORS OR OMISSIONS; (2) THAT DEFECTS WILL BE CORRECTED; (3) THAT THE SERVICES OR THE SERVERS HOSTING THEM ARE FREE OF VIRUSES OR OTHER HARMFUL CODE; OR (4) THAT THE SERVICES OR INFORMATION AVAILABLE THROUGH THE SERVICES WILL CONTINUE TO BE AVAILABLE. THE CBS INTERACTIVE PARTIES SHALL HAVE NO LIABILITY FOR ANY SUCH ISSUES. THE CBS INTERACTIVE PARTIES DISCLAIM ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, WITHOUT LIMITATION, NONINFRINGEMENT, MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, TITLE, AND AS TO QUALITY, AVAILABILITY AND SUBJECT MATTER OF CONTENT. THE SERVICES, INCLUDING ALL CONTENT AND FUNCTIONS MADE AVAILABLE ON OR ACCESSED THROUGH OR SENT FROM THE SERVICES, ARE PROVIDED “AS IS,” “AS AVAILABLE,” AND “WITH ALL FAULTS.”YOUR ACCESS TO AND USE OF THE SERVICES (INCLUDING THEIR FUNCTIONS AND CONTENT) IS AT YOUR RISK. IF YOU ARE DISSATISFIED WITH THE SERVICES, YOUR SOLE AND EXCLUSIVE REMEDY IS TO DISCONTINUE ACCESSING AND USING THE SERVICES.THE CBS INTERACTIVE PARTIES WILL NOT BE LIABLE FOR ANY FAILURE OR DELAY IN THEIR PERFORMANCE DUE TO ANY CAUSE BEYOND THEIR REASONABLE CONTROL, INCLUDING ACTS OF WAR, ACTS OF GOD, ACTS OF THIRD PARTIES, EARTHQUAKE, FLOOD, EMBARGO, RIOT, SABOTAGE, LABOR SHORTAGE OR DISPUTE, GOVERNMENTAL ACT, POWER FAILURE OR FAILURE OF THE INTERNET OR COMPUTER EQUIPMENT.YOU ACKNOWLEDGE AND AGREE THAT IF YOU INCUR ANY DAMAGES THAT ARISE OUT OF THE CBS INTERACTIVE PARTIES’ ACTS OR OMISSIONS, THE DAMAGES, IF ANY, ARE NOT IRREPARABLE AND ARE NOT SUFFICIENT TO ENTITLE YOU TO AN INJUNCTION OR OTHER EQUITABLE RELIEF RESTRICTING OPERATION OF THE SERVICES OR ANY OTHER SERVICE, PROPERTY, PRODUCT, PROGRAM, TELEVISION SHOW, MOTION PICTURE, OR OTHER CONTENT OWNED OR CONTROLLED BY THE CBS INTERACTIVE PARTIES.16. Governing Law, Venue, and JurisdictionThese Terms and all claims as between you and us arising from or related to your use of the Services will be governed by and construed in accordance with the laws of the State of California, except California’s conflict of law rules. These Terms will not be governed by the United Nations Convention on Contracts for the International Sale of Goods, if applicable.With respect to any disputes or claims not subject to arbitration or small claims court (as set forth in Section 2 above), you agree to jurisdiction in the state and federal courts in San Francisco, California.Regardless of any statute or law to the contrary, you must file any claim or action related to use of the Services or these Terms within one year after such claim or action accrued. Otherwise, you will waive the claim or action.17. MiscellaneousWe may be required by state or federal law to notify you of certain events. You hereby acknowledge and agree that such notices will be effective upon our posting them in the relevant Service or delivering them to you via email. You may update your email address by visiting the Services where you have provided contact information. If you do not provide us with accurate information, we will not be responsible for failure to notify you. Our failure to exercise or enforce any right or provision in these Terms will not constitute a waiver of such right or provision. These Terms, including all additional terms, conditions, and policies on the Services, constitute the entire agreement between you and us and supersede all prior agreements with respect to the subject matter hereof. Nothing in these Terms affects any non-waivable statutory rights that apply to you.
        If any part of these Terms is determined to be invalid or unenforceable under applicable law, that provision will be removed, and the remainder of the Terms will continue to be valid and enforceable.You authorize us to provide information concerning you and your activities to comply with applicable laws or respond to court order, subpoenas, or other lawful requests, or if we believe doing so would protect your safety or that of another person or protect the security of the Services, or as otherwise described in the Privacy Policy, subject to your right to make certain choices about our use of your personal information as described in the Privacy Policy.If you do not agree to these Terms, you should immediately stop using the Services. If you want to delete your account on a Service, please use contact instructions posted on the Service at which you obtained the account. If you are a subscriber of a fee-based Service, you must first cancel your subscription before you will be able to delete your account. Any User Submissions you made while using the Services will continue to be governed by Section 7 of these Terms.Sections 2, 7 and 11-17 of these Terms will survive any termination of your access to the Services, whether we terminate your access or you voluntarily discontinue your use.
    </p>
</div>
@else
<div class="content">
    <h1>Legal: {{pageName($subsection)}}</h1>
    <br>
    <h1>Privacy Policy</h1>
    <p>Last updated: November 10, 2021</p>
    <p>This Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your information when You use the Service and tells You about Your privacy rights and how the law protects You.</p>
    <p>We use Your Personal data to provide and improve the Service. By using the Service, You agree to the collection and use of information in accordance with this Privacy Policy. This Privacy Policy has been created with the help of the <a href="https://www.freeprivacypolicy.com/free-privacy-policy-generator/" target="_blank">Privacy Policy Generator</a>.</p>
    <h1>Interpretation and Definitions</h1>
    <h2>Interpretation</h2>
    <p>The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>
    <h2>Definitions</h2>
    <p>For the purposes of this Privacy Policy:</p>
    <ul>
        <li>
            <p><strong>Account</strong> means a unique account created for You to access our Service or parts of our Service.</p>
        </li>
        <li>
            <p><strong>Company</strong> (referred to as either &quot;the Company&quot;, &quot;We&quot;, &quot;Us&quot; or &quot;Our&quot; in this Agreement) refers to Cool Tech.</p>
        </li>
        <li>
            <p><strong>Cookies</strong> are small files that are placed on Your computer, mobile device or any other device by a website, containing the details of Your browsing history on that website among its many uses.</p>
        </li>
        <li>
            <p><strong>Country</strong> refers to: South Africa</p>
        </li>
        <li>
            <p><strong>Device</strong> means any device that can access the Service such as a computer, a cellphone or a digital tablet.</p>
        </li>
        <li>
            <p><strong>Personal Data</strong> is any information that relates to an identified or identifiable individual.</p>
        </li>
        <li>
            <p><strong>Service</strong> refers to the Website.</p>
        </li>
        <li>
            <p><strong>Service Provider</strong> means any natural or legal person who processes the data on behalf of the Company. It refers to third-party companies or individuals employed by the Company to facilitate the Service, to provide the Service on behalf of the Company, to perform services related to the Service or to assist the Company in analyzing how the Service is used.</p>
        </li>
        <li>
            <p><strong>Usage Data</strong> refers to data collected automatically, either generated by the use of the Service or from the Service infrastructure itself (for example, the duration of a page visit).</p>
        </li>
        <li>
            <p><strong>Website</strong> refers to Cool Tech, accessible from <a href="cooltech.com" rel="external nofollow noopener" target="_blank">cooltech.com</a></p>
        </li>
        <li>
            <p><strong>You</strong> means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</p>
        </li>
    </ul>
    <h1>Collecting and Using Your Personal Data</h1>
    <h2>Types of Data Collected</h2>
    <h3>Personal Data</h3>
    <p>While using Our Service, We may ask You to provide Us with certain personally identifiable information that can be used to contact or identify You. Personally identifiable information may include, but is not limited to:</p>
    <ul>
        <li>Usage Data</li>
    </ul>
    <h3>Usage Data</h3>
    <p>Usage Data is collected automatically when using the Service.</p>
    <p>Usage Data may include information such as Your Device's Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that You visit, the time and date of Your visit, the time spent on those pages, unique device identifiers and other diagnostic data.</p>
    <p>When You access the Service by or through a mobile device, We may collect certain information automatically, including, but not limited to, the type of mobile device You use, Your mobile device unique ID, the IP address of Your mobile device, Your mobile operating system, the type of mobile Internet browser You use, unique device identifiers and other diagnostic data.</p>
    <p>We may also collect information that Your browser sends whenever You visit our Service or when You access the Service by or through a mobile device.</p>
    <h3>Tracking Technologies and Cookies</h3>
    <p>We use Cookies and similar tracking technologies to track the activity on Our Service and store certain information. Tracking technologies used are beacons, tags, and scripts to collect and track information and to improve and analyze Our Service. The technologies We use may include:</p>
    <ul>
        <li><strong>Cookies or Browser Cookies.</strong> A cookie is a small file placed on Your Device. You can instruct Your browser to refuse all Cookies or to indicate when a Cookie is being sent. However, if You do not accept Cookies, You may not be able to use some parts of our Service. Unless you have adjusted Your browser setting so that it will refuse Cookies, our Service may use Cookies.</li>
        <li><strong>Flash Cookies.</strong> Certain features of our Service may use local stored objects (or Flash Cookies) to collect and store information about Your preferences or Your activity on our Service. Flash Cookies are not managed by the same browser settings as those used for Browser Cookies. For more information on how You can delete Flash Cookies, please read &quot;Where can I change the settings for disabling, or deleting local shared objects?&quot; available at <a href="https://helpx.adobe.com/flash-player/kb/disable-local-shared-objects-flash.html#main_Where_can_I_change_the_settings_for_disabling__or_deleting_local_shared_objects_" rel="external nofollow noopener" target="_blank">https://helpx.adobe.com/flash-player/kb/disable-local-shared-objects-flash.html#main_Where_can_I_change_the_settings_for_disabling__or_deleting_local_shared_objects_</a></li>
        <li><strong>Web Beacons.</strong> Certain sections of our Service and our emails may contain small electronic files known as web beacons (also referred to as clear gifs, pixel tags, and single-pixel gifs) that permit the Company, for example, to count users who have visited those pages or opened an email and for other related website statistics (for example, recording the popularity of a certain section and verifying system and server integrity).</li>
    </ul>
    <p>Cookies can be &quot;Persistent&quot; or &quot;Session&quot; Cookies. Persistent Cookies remain on Your personal computer or mobile device when You go offline, while Session Cookies are deleted as soon as You close Your web browser. Learn more about cookies: <a href="https://www.freeprivacypolicy.com/blog/sample-privacy-policy-template/#Use_Of_Cookies_And_Tracking" target="_blank">Use of Cookies by Free Privacy Policy</a>.</p>
    <p>We use both Session and Persistent Cookies for the purposes set out below:</p>
    <ul>
        <li>
            <p><strong>Necessary / Essential Cookies</strong></p>
            <p>Type: Session Cookies</p>
            <p>Administered by: Us</p>
            <p>Purpose: These Cookies are essential to provide You with services available through the Website and to enable You to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. Without these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide You with those services.</p>
        </li>
        <li>
            <p><strong>Cookies Policy / Notice Acceptance Cookies</strong></p>
            <p>Type: Persistent Cookies</p>
            <p>Administered by: Us</p>
            <p>Purpose: These Cookies identify if users have accepted the use of cookies on the Website.</p>
        </li>
        <li>
            <p><strong>Functionality Cookies</strong></p>
            <p>Type: Persistent Cookies</p>
            <p>Administered by: Us</p>
            <p>Purpose: These Cookies allow us to remember choices You make when You use the Website, such as remembering your login details or language preference. The purpose of these Cookies is to provide You with a more personal experience and to avoid You having to re-enter your preferences every time You use the Website.</p>
        </li>
    </ul>
    <p>For more information about the cookies we use and your choices regarding cookies, please visit our Cookies Policy or the Cookies section of our Privacy Policy.</p>
    <h2>Use of Your Personal Data</h2>
    <p>The Company may use Personal Data for the following purposes:</p>
    <ul>
        <li>
            <p><strong>To provide and maintain our Service</strong>, including to monitor the usage of our Service.</p>
        </li>
        <li>
            <p><strong>To manage Your Account:</strong> to manage Your registration as a user of the Service. The Personal Data You provide can give You access to different functionalities of the Service that are available to You as a registered user.</p>
        </li>
        <li>
            <p><strong>For the performance of a contract:</strong> the development, compliance and undertaking of the purchase contract for the products, items or services You have purchased or of any other contract with Us through the Service.</p>
        </li>
        <li>
            <p><strong>To contact You:</strong> To contact You by email, telephone calls, SMS, or other equivalent forms of electronic communication, such as a mobile application's push notifications regarding updates or informative communications related to the functionalities, products or contracted services, including the security updates, when necessary or reasonable for their implementation.</p>
        </li>
        <li>
            <p><strong>To provide You</strong> with news, special offers and general information about other goods, services and events which we offer that are similar to those that you have already purchased or enquired about unless You have opted not to receive such information.</p>
        </li>
        <li>
            <p><strong>To manage Your requests:</strong> To attend and manage Your requests to Us.</p>
        </li>
        <li>
            <p><strong>For business transfers:</strong> We may use Your information to evaluate or conduct a merger, divestiture, restructuring, reorganization, dissolution, or other sale or transfer of some or all of Our assets, whether as a going concern or as part of bankruptcy, liquidation, or similar proceeding, in which Personal Data held by Us about our Service users is among the assets transferred.</p>
        </li>
        <li>
            <p><strong>For other purposes</strong>: We may use Your information for other purposes, such as data analysis, identifying usage trends, determining the effectiveness of our promotional campaigns and to evaluate and improve our Service, products, services, marketing and your experience.</p>
        </li>
    </ul>
    <p>We may share Your personal information in the following situations:</p>
    <ul>
        <li><strong>With Service Providers:</strong> We may share Your personal information with Service Providers to monitor and analyze the use of our Service, to contact You.</li>
        <li><strong>For business transfers:</strong> We may share or transfer Your personal information in connection with, or during negotiations of, any merger, sale of Company assets, financing, or acquisition of all or a portion of Our business to another company.</li>
        <li><strong>With Affiliates:</strong> We may share Your information with Our affiliates, in which case we will require those affiliates to honor this Privacy Policy. Affiliates include Our parent company and any other subsidiaries, joint venture partners or other companies that We control or that are under common control with Us.</li>
        <li><strong>With business partners:</strong> We may share Your information with Our business partners to offer You certain products, services or promotions.</li>
        <li><strong>With other users:</strong> when You share personal information or otherwise interact in the public areas with other users, such information may be viewed by all users and may be publicly distributed outside.</li>
        <li><strong>With Your consent</strong>: We may disclose Your personal information for any other purpose with Your consent.</li>
    </ul>
    <h2>Retention of Your Personal Data</h2>
    <p>The Company will retain Your Personal Data only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use Your Personal Data to the extent necessary to comply with our legal obligations (for example, if we are required to retain your data to comply with applicable laws), resolve disputes, and enforce our legal agreements and policies.</p>
    <p>The Company will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for a shorter period of time, except when this data is used to strengthen the security or to improve the functionality of Our Service, or We are legally obligated to retain this data for longer time periods.</p>
    <h2>Transfer of Your Personal Data</h2>
    <p>Your information, including Personal Data, is processed at the Company's operating offices and in any other places where the parties involved in the processing are located. It means that this information may be transferred to — and maintained on — computers located outside of Your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from Your jurisdiction.</p>
    <p>Your consent to this Privacy Policy followed by Your submission of such information represents Your agreement to that transfer.</p>
    <p>The Company will take all steps reasonably necessary to ensure that Your data is treated securely and in accordance with this Privacy Policy and no transfer of Your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of Your data and other personal information.</p>
    <h2>Disclosure of Your Personal Data</h2>
    <h3>Business Transactions</h3>
    <p>If the Company is involved in a merger, acquisition or asset sale, Your Personal Data may be transferred. We will provide notice before Your Personal Data is transferred and becomes subject to a different Privacy Policy.</p>
    <h3>Law enforcement</h3>
    <p>Under certain circumstances, the Company may be required to disclose Your Personal Data if required to do so by law or in response to valid requests by public authorities (e.g. a court or a government agency).</p>
    <h3>Other legal requirements</h3>
    <p>The Company may disclose Your Personal Data in the good faith belief that such action is necessary to:</p>
    <ul>
        <li>Comply with a legal obligation</li>
        <li>Protect and defend the rights or property of the Company</li>
        <li>Prevent or investigate possible wrongdoing in connection with the Service</li>
        <li>Protect the personal safety of Users of the Service or the public</li>
        <li>Protect against legal liability</li>
    </ul>
    <h2>Security of Your Personal Data</h2>
    <p>The security of Your Personal Data is important to Us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While We strive to use commercially acceptable means to protect Your Personal Data, We cannot guarantee its absolute security.</p>
    <h1>Children's Privacy</h1>
    <p>Our Service does not address anyone under the age of 13. We do not knowingly collect personally identifiable information from anyone under the age of 13. If You are a parent or guardian and You are aware that Your child has provided Us with Personal Data, please contact Us. If We become aware that We have collected Personal Data from anyone under the age of 13 without verification of parental consent, We take steps to remove that information from Our servers.</p>
    <p>If We need to rely on consent as a legal basis for processing Your information and Your country requires consent from a parent, We may require Your parent's consent before We collect and use that information.</p>
    <h1>Links to Other Websites</h1>
    <p>Our Service may contain links to other websites that are not operated by Us. If You click on a third party link, You will be directed to that third party's site. We strongly advise You to review the Privacy Policy of every site You visit.</p>
    <p>We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.</p>
    <h1>Changes to this Privacy Policy</h1>
    <p>We may update Our Privacy Policy from time to time. We will notify You of any changes by posting the new Privacy Policy on this page.</p>
    <p>We will let You know via email and/or a prominent notice on Our Service, prior to the change becoming effective and update the &quot;Last updated&quot; date at the top of this Privacy Policy.</p>
    <p>You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>
    <h1>Contact Us</h1>
    <p>If you have any questions about this Privacy Policy, You can contact us:</p>
    <ul>
        <li>By visiting this page on our website: <a href="cooltech.com" rel="external nofollow noopener" target="_blank">cooltech.com</a></li>
    </ul>
</div>
@endif

@endsection
