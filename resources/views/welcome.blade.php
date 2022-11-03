<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>

<!--HEADER-->
<header class="w-full fixed bg-blue-900 flex flex-1 items-center px-4 lg:px-28 py-2">
    <div class="flex flex-1 text-white h-6"><p>247EzLoan</p></div>
    <div class="flex md:space-x-6">
        <div class="hidden md:flex">
            <ul class="flex text-white md:space-x-6 items-center">
                <li><a href="#">Loans</a></li>
                <li><a href="#">FAQ</a></li>
            </ul>
        </div>
        <div><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="md:hidden text-white w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
            </svg>
        </div>
    </div>
</header>

<!--MAIN-->
<main>
    <!--BANNER-->
    <div class="md:flex md:flex-1 pt-16 md:pt-10 text-center md:text-start lg:text-start md:justify-center pb-8">
        <div class=" hidden md:flex md:w-[1700px] lg:w-[2000px] md:mt-2 place-items-center lg:content-end">
            <img class="lg:mx-auto lg:w-fit lg:h-screen" src="/img/banner2.jpg">
        </div>
        <div class="flex flex-col md:place-content-center md:pt-10 md:space-y-8 md:pl-5 lg:pr-24">
            <p class="text-4xl lg:text-5xl tracking-wide font-semibold text-blue-800 py-6 md:py-0 px-4">Online loans <br> designed for you</p>

            <!--FORM-->
            <form action="" class="flex flex-col px-4 space-y-4">
                <div class="text-start space-y-3">
                    <p>How much do you want?</p>
                    <select name="" id="" class="form-input">
                        <option value="300">$100-$300</option>
                        <option value="500">$301-$500</option>
                        <option value="700" selected>$501-$1000</option>
                        <option value="1000">$1000+</option>
                    </select>
                    <p>Your email</p>
                    <input type="email" name="email" class="form-input" placeholder="email@gmail.com">
                    <p>Your Zip Code</p>
                    <input type="text" name="zip" class="form-input">
                </div>

                <div class="flex text-start pr-4">
                    <div><input type="checkbox"></div>
                    <div class="pl-3 text-xs">
                        <p>By submitting my request, I acknowledge I have read, understand and agree to the terms of the
                            <a href="">Privacy Policy</a>, <a href="">Terms & Conditions</a> of Use Agreement. I also understand I may be contacted by telephone by a lender concerning my loan request and other marketing partners via SMS. I also agree to receive relevant email from JuniperFinancial, AllDayFunds and Fortifynance.</p>
                    </div>
                </div>

                <div class="flex flex-col mx-auto">
                    <button type="submit" class="apply-button">Get Started</button>
                </div>
            </form>
        </div>
    </div>

    <!--UNEXPECTED EXPENSES-->
    <div class="bg-gray-50 w-full px-4 md:px-24 lg:px-72 text-gray-800 md:text-lg">
        <h1 class="text-blue-800 text-2xl md:text-4xl text-center font-semibold py-8 md:py-12 ">Online Loans for Life’s Unexpected Expenses</h1>
        <p class="pb-4 md:pb-12">Everyday consumers have access to financial support from OppLoans when they need it most. We offer small-dollar, online loans that are repaid in affordable installments.</p>
        <ul class="space-y-4 md:space-y-12">
            <li>
                <p><b>A simple and straightforward process:</b> When it comes to your finances, we don't believe in surprises.</p>
            </li>
            <li>
                <p><b>Establish credit history through repayments:</b> We’re interested in making an impact on your financial future. That’s why we report loan repayments to all three major credit bureaus.</p>
            </li>
            <li>
                <p><b>Loan support at every step:</b> With top-rated customer support, we’re by your side at every part of the process. Our Loan Advocates are here for you. We succeed when you do.</p>
            </li>
            <li>
                <p><b>Develop your financial skills:</b> Learn how to make better financial decisions with essential educational resources. You’ll feel empowered to take control of your financial situation.</p>
            </li>
        </ul>
        <h2 class="pt-8 md:pt-12 pb-4 text-center text-2xl text-blue-800 font-semibold">We’re in this together</h2>
        <p class="pb-8 md:pb-12">Our goal is to help our customers champion their finances. Partner with us on your financial journey. This isn’t just a loan. This is an opportunity for a better financial future.</p>
    </div>

    <!--APPLY FOR-->
    <div class="bg-blue-50 w-full px-4 py-8 order-1">
        <h1  class="text-blue-800 text-2xl md:text-4xl text-center font-semibold px-10 pb-2">Apply for an Online Loan Through OppLoans</h1>
        <p class="text-center">We help people find a solution for their individual financial needs.</p>

        <div class="lg:flex">
            <div class="py-4 lg:flex lg:w-1/2">
                <img class="md:mx-auto object-cover border-8 border-blue-900 border-opacity-50 border-double rounded-xl" src="/img/familia.webp">
            </div>

            <div class="text-center px-12 space-y-8 lg:flex lg:flex-col">
                <div class="md:flex mx-auto md:space-y-0 lg:flex lg:flex-col">
                    <div class="family-dividers">
                        <div class="family-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[80px] h-[80px] mx-auto">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="apply-headers">Easy to Apply</h3>
                        <p>A simplified application process. Apply online from start to finish.</p>
                    </div>
                    <div class="family-dividers">
                        <div class="family-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[80px] h-[80px] mx-auto">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                            </svg>
                        </div>
                        <h3 class="apply-headers">Fast Funding</h3>
                        <p>If approved, receive money in your account as soon as the next business day!</p>
                    </div>
                </div>

                <div class="md:flex mx-auto md:space-y-0 lg:flex lg:flex-col">
                    <div class="family-dividers">
                        <div class="family-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[80px] h-[80px] mx-auto">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.633 10.5c.806 0 1.533-.446 2.031-1.08a9.041 9.041 0 012.861-2.4c.723-.384 1.35-.956 1.653-1.715a4.498 4.498 0 00.322-1.672V3a.75.75 0 01.75-.75A2.25 2.25 0 0116.5 4.5c0 1.152-.26 2.243-.723 3.218-.266.558.107 1.282.725 1.282h3.126c1.026 0 1.945.694 2.054 1.715.045.422.068.85.068 1.285a11.95 11.95 0 01-2.649 7.521c-.388.482-.987.729-1.605.729H13.48c-.483 0-.964-.078-1.423-.23l-3.114-1.04a4.501 4.501 0 00-1.423-.23H5.904M14.25 9h2.25M5.904 18.75c.083.205.173.405.27.602.197.4-.078.898-.523.898h-.908c-.889 0-1.713-.518-1.972-1.368a12 12 0 01-.521-3.507c0-1.553.295-3.036.831-4.398C3.387 10.203 4.167 9.75 5 9.75h1.053c.472 0 .745.556.5.96a8.958 8.958 0 00-1.302 4.665c0 1.194.232 2.333.654 3.375z" />
                            </svg>
                        </div>
                        <h3 class="apply-headers">Loans that fit your financial needs</h3>
                        <p>We offer loans from $100 to $1,000+</p>
                    </div>

                    <div class="family-dividers">
                        <div class="family-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[80px] h-[80px] mx-auto">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                            </svg>
                        </div>
                        <h3 class="apply-headers">No Hidden Fees</h3>
                        <p>We’re committed to transparency. No origination fees. No prepayment penalties. You’ll know what to expect.</p>
                    </div>
                </div>

                <div>
                    <button class="apply-button">Apply Now</button>
                </div>
            </div>
        </div>
    </div>






    <!--FAQ-->
    <div class="px-4 py-8">
        <ul class="space-y-4">
            <li>
                <div class="flex flex-1 place-items-center faq-item" id="faq-1" onclick="toggleFaqItem(this);">
                    <h3 class="ask">Personal Loan. What is it?</h3>
                    <svg id="faq-1-arrow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 border-2 border-blue-100 text-blue-800"  onclick="w3_open()">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div id="faq-1-answer" class="hidden">
                    <p>A personal loan is a short to medium term loan that can be useful for financial emergencies. The amount of money loaned is based on the amount of money a person makes. It is perfect for people who have limited access to credit. Many people who request personal loans would not normally be able to obtain loans from a traditional bank.</p>
                </div>
            </li>
            <li>
                <div class="flex flex-1 place-items-center faq-item" id="faq-2" onclick="toggleFaqItem(this);">
                    <h3 class="ask">What are the minimum requirements for submitting a loan request?</h3>
                    <svg id="faq-2-arrow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 border-2 border-blue-100 text-blue-800" >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div id="faq-2-answer" class="hidden">
                    <p>There are certain requirements one has to fulfill in order to submit a request for a personal loan. Borrower must:</p>
                    <p>• be a United States Citizen or permanent resident</p>
                    <p>• be at least 18 years old</p>
                    <p>• have a job/income</p>
                    <p>• have direct deposit to a bank account</p>
                </div>
            </li>
            <li>
                <div class="flex flex-1 place-items-center faq-item" id="faq-3" onclick="toggleFaqItem(this);">
                    <h3 class="ask">What is the process of getting a personal loan?</h3>
                    <svg id="faq-3-arrow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 border-2 border-blue-100 text-blue-800" >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div id="faq-3-answer" class="hidden">
                    <p>Getting a personal loan is generally simple and straightforward. Most people get funds deposited directly into their account upon approval. Sometimes lenders may ask for additional information but generally the entire process is online.</p>
                </div>
            </li>
            <li>
                <div class="flex flex-1 place-items-center faq-item" id="faq-4" onclick="toggleFaqItem(this);">
                    <h3 class="ask">What if I have a bad credit history?</h3>
                    <svg id="faq-4-arrow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 border-2 border-blue-100 text-blue-800" >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div id="faq-4-answer" class="hidden">
                    <p>Even people with bad credit history can be eligible for a personal loan. Many people who would not get the chance from a traditional bank, can get a loan as quickly as the next business day.</p>
                </div>
            </li>
            <li>
                <div class="flex flex-1 place-items-center faq-item" id="faq-5" onclick="toggleFaqItem(this);">
                    <h3 class="ask">Will I need to print or fax anything?</h3>
                    <svg id="faq-5-arrow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 border-2 border-blue-100 text-blue-800" >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div id="faq-5-answer" class="hidden">
                    <p>Part of the advantage of these loans is that most of the participating lenders require no papers to be printed or faxed in order to request a loan. However it is important that you have a printer to print out the loan documents for your own records unless you are able to save them as digital files.</p>
                </div>
            </li>
            <li>
                <div class="flex flex-1 place-items-center faq-item" id="faq-6" onclick="toggleFaqItem(this);">
                    <h3 class="ask">How much will a personal loan cost me?</h3>
                    <svg id="faq-6-arrow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 border-2 border-blue-100 text-blue-800" >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div id="faq-6-answer" class="hidden">
                    <p>Please remember that we are not a lender and we do not provide lending services directly to consumers. Submitting your registration through us incurs absolutely no cost. We are paid by the Participating Lenders or network of Participating Lenders to whom we referred you for each potential customer referral. Even if you turn down the loan or exit the process at any time, our service remains FREE of charge to you. Please check the loan agreement presented to you by the lender you are matched with and be sure to speak with the lender’s customer service to get all of your questions answered BEFORE signing the loan agreement. Once you have signed the loan agreement you have entered a binding contract and will be responsible for paying back the loan at the agreed APR.</p>
                </div>
            </li>
            <li>
                <div class="flex flex-1 place-items-center faq-item" id="faq-7" onclick="toggleFaqItem(this);">
                    <h3 class="ask">What is the repayment process?</h3>
                    <svg id="faq-7-arrow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 border-2 border-blue-100 text-blue-800" >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div id="faq-7-answer" class="hidden">
                    <p>The loan amount and loan fees are withdrawn from your checking account automatically on the due date(s) of your loan by The Lender. Some lenders allow for extensions but many do not so be sure to read and be clear on all terms of the loan before signing the contract.</p>
                </div>
            </li>
            <li>
                <div class="flex flex-1 place-items-center faq-item" id="faq-8" onclick="toggleFaqItem(this);">
                    <h3 class="ask">What happens if I am late on a payment or need to skip a payment?</h3>
                    <svg id="faq-8-arrow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 border-2 border-blue-100 text-blue-800" >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div id="faq-8-answer" class="hidden">
                    <p>Each Participating Lenders has their own policies pertaining to late payments. The Participating Lender's policy, including the additional charges you will incur, is detailed in the loan documents provided to you by your Participating Lender before you are requested to sign the loan agreement. Once you have signed the Participating Lenders loan documents, you will be expected to understand and abide by the loan terms including the additional charges and/or interest if your repayment is late. If you are not able to make the payments timely, please contact your Participating Lending as soon as you are aware the loan will be late and work with them,but remember additional fees and interest may apply.</p>
                </div>
            </li>
            <li>
                <div class="flex flex-1 place-items-center faq-item" id="faq-9" onclick="toggleFaqItem(this);">
                    <h3 class="ask">What if I don't make a payment at all?</h3>
                    <svg id="faq-9-arrow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 border-2 border-blue-100 text-blue-800" >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div id="faq-9-answer" class="hidden">
                    <p>Additional fees, and charges by The Lender may apply to you in the event that you do not repay your loan. Please remember that refusal or failure to pay may result in legal action against you by The Lender in an attempt to collect the loan amount, interest and costs of collections. It. Failure to repay a loan will have a negative impact on your credit score and likely make it more difficult for you to access credit in the future.</p>
                </div>
            </li>
            <li>
                <div class="flex flex-1 place-items-center faq-item" id="faq-10" onclick="toggleFaqItem(this);">
                    <h3 class="ask">Is there an option to refinance an existing loan?</h3>
                    <svg id="faq-10-arrow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 border-2 border-blue-100 text-blue-800" >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                    </svg>
                </div>
                <div id="faq-10-answer" class="hidden">
                    <p>Loan renewal policies are largely governed by State statute. In states where rollovers or extensions are allowed, interest rates, and late fees may be added to the original loan amount and that can result in a substantial increase to the amount you will be required to payback. Again, be sure to read the Participating Lenders loan terms in carefully and thoroughly before signing the initial loan contract.</p>
                </div>
            </li>
        </ul>
    </div>





















    <!--WO WE SERVE-->
    <div class="bg-red-300 w-full">
        <h1>Who We Serve</h1>
        <p>
            Credit remains out of reach for everyday consumers. Learn how OppLoans provides the tools so people can take control of their finances.
        </p>
        <img src="">
        <div>
            <div>
                <p>logo</p>
                <p>60 million U.S. adults
                    lack access to traditional credit*</p>
            </div>
            <div>
                <p>logo</p>
                <p>64% of U.S. consumers
                    live paycheck to paycheck*</p>
            </div>
            <div>
                <p>logo</p>
                <p>44% of U.S. adults have savings
                    to cover a $1,000 unplanned expense*</p>
            </div>
        </div>
    </div>
</main>

<!--FOOTER-->
<footer class="bg-blue-300 w-full">
    <div>
        <span>logo</span>
        <span>social media</span>
    </div>
    <div>
        <h3>OppLoans Offers</h3>
        <a href="#">Online Personal Loans</a>
        <a href="#">Rates and Terms</a>
    </div>
    <div>
        <h3>Learn More About</h3>
        <a href="#">Bad Credit Loans</a>
        <a href="#">No Credit Check Loans</a>
        <a href="#">Installment Loans</a>
    </div>
    <div>
        <h3>Legal</h3>
        <a href="#">Investor Relations</a>
        <a href="#">Accessibility</a>
        <a href="#">Security</a>
        <a href="#">Contact</a>
    </div>

    <!--SMALL TERMS-->
    <div class="bg-pink-400 w-full">
        <p>
            © 2022 Opportunity Financial, LLC. All Rights Reserved. Use of Opportunity Financial, LLC is subject to our
            <a href=""#>Terms of Use</a> and <a href=""#>Privacy Policy</a>.

            <a href=""#>California Disclosures and Privacy Policy</a> | California Consumers can opt-out of the sale of personal information by clicking <a href=""#>Do Not Sell My Personal Information</a>.

            Applications submitted on this website may be originated by one of several lenders, including: Opportunity Financial LLC, a licensed lender in certain states; or one of our <a href=""#>lending partners</a>. All loans originated by our lending partners will be serviced by OppLoans.

            NV Residents: The use of high-interest loans services should be used for short-term financial needs only and not as a long-term financial solution. Customers with credit difficulties should seek credit counseling before entering into any loan transaction.

            1Subject to credit approval and verification. Actual approved loan amount and terms are dependent on standard underwriting guidelines and credit policies. Funds are typically deposited via ACH for delivery for next business day if verification is completed and final approval occurs before 8:00 PM CT, Monday-Friday. Availability of the funds is dependent on how quickly your bank processes the transaction.

            2OppLoans may use credit report information provided by Clarity Services and Experian as part of the application process to determine your creditworthiness. Neither credit inquiry will appear as a hard credit inquiry on your Experian credit report and therefore they will not affect your FICO score.

            4Installment loan amounts typically range from $500 to $4,000. APR ranges from 59% to 160%. Installment loan lengths range from 9 to 18 months. Example: A $2,000 installment loan repayable in 9 monthly payments would have an APR of 160% and monthly payments of $394.58. <a href=""#>Rates and terms vary by state</a>. This is an expensive form of credit and you should determine whether our product(s) meets your financial needs.

            5According to the Consumer Federation America, a non-profit consumer advocacy group, payday loans range in size from $100 to $1,000, depending on state legal maximums, and carry an average annual percentage rate (APR) of 400%. The maximum APR for a loan offered through and serviced by OppLoans is 160% and loan sizes range from $500 to $4,000. <a href=""#>https://paydayloaninfo.org/how-payday-loans-work/</a>.

            6OppLoans reports customer payment history to the three major credit bureaus. On-time payments may improve credit score.

            USA PATRIOT ACT NOTICE: IMPORTANT INFORMATION ABOUT PROCEDURES FOR OPENING A NEW ACCOUNT

            To help the government fight the funding of terrorism and money laundering activities, Federal law requires all financial institutions to obtain, verify, and record information that identifies each person who opens an account. What this means for you: When you open an account, we will ask for your name, address, date of birth, and other information that will allow us to identify you. We may also ask to see your driver's license or other identifying documents.

            If you have questions or concerns, please contact the Opportunity Financial Customer Support Team by phone at (800) 990-9130, Monday – Friday, 7 a.m. – 11:30 p.m. and Saturday and Sunday between 9 a.m. – 5:00 p.m. Central Time, or by sending an email to <a href=""#>info@opploans.com</a>.
        </p>
    </div>
</footer>

<script>
    function toggleFaqItem(e) {
        let faqAnswer = document.getElementById(e.id + '-answer');
        let faqArrow = document.getElementById(e.id + '-arrow');
        if (faqAnswer.classList.contains('hidden')) {
            faqAnswer.classList.remove('hidden');
            faqArrow.classList.add('rotate-180');
        } else {
            faqAnswer.classList.add('hidden');
            faqArrow.classList.remove('rotate-180');
        }
    }



</script>

</body>
</html>
