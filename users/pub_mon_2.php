<?php require 'const_user/header.php';

if(!isset($_SESSION['uID'])){
  header("Location: user_login.php");
  exit;
}
?>
<!--content-->
   <div class="choseweek">
       <div class="container">
           <div class="title1">
               <h3>Month2</h3><br><br>
               <p>go to your week</p>
           </div>
           <ul class="list-group list-group-horizontal">
               <li class="li1 list-group-item list-group-item-action"><a href="#Foods">Foods</a></li>
                <li class="li2 list-group-item list-group-item-action"><a href="#Drinks">Drinks</a></li>
                <li class="li3 list-group-item list-group-item-action"><a href="#Sports">Sports</a></li>
                <li class="li4 list-group-item list-group-item-action"><a href="#Tests">Tests</a></li>
                <li class="li4 list-group-item list-group-item-action"><a href="#Warnings">Warnings</a></li>
           </ul>
       </div>
   </div><br><br><br>


   <!--informations-->

   <!--informations-->

    <div class="weekinfo bg-light p-5" id="Foods">
        <div class="container">
            <div class="title1">
                <h3>Foods</h3><br><br>
            </div>
            <br><br>
            <p>Have you entered the second month of pregnancy? Are you eating right? Eating healthy food ensures that your baby gets all the essential nutrients for proper growth and development. A healthy diet also helps you stay fit and active during this crucial phase.</p>
            <h3>Foods To Include In The Second Month Of Pregnancy</h3>
            <br>
            <p>Here are the essential foods that you must include in your diet during the second month of pregnancy:</p>
            <p><strong>1. Calcium</strong> is an important nutrient for developing strong bones, teeth, and muscles in the fetus. It is also essential for the proper functioning of the fetal heart and nerves. Foods to include:</p>
            <ul>
                <li>Cheese</li>
                <li>Milk</li>
                <li>Yogurt</li>
                <li>Brocoli</li>
                <li>Tofu</li>
                <li>Kale</li>
                <li>Nuts</li>
            </ul>
            <p><strong>2. Folic</strong> acid is essential to prevent neural tube defects in the baby and also helps in blood formation. Foods include:</p>
            <ul>
                <li>Green leafy vegetables</li>
                <li>Avocado</li>
                <li>Legumes</li>
                <li>Lentils</li>
                <li>Orange </li>
                <li>juice</li>
                <li>Fortified </li>
                <li>bread</li>
                <li>Beans</li>
                <li>Cereals</li>

            </ul>
            <p><strong>3. Iron</strong> is essential for improving the hemoglobin levels to meet the blood required by the placenta and the fetus. Foods include:</p>
            <ul>
                <li>Leafy green vegetables</li>
                <li>Clams</li>
                <li>Lean meat</li>
                <li>Beef</li>
                <li>Seafood</li>
                <li>Cereal</li>
                <li>Bread</li>
                <li>Pasta</li>
                <li>Nuts</li>
                <li>Beans</li>
                <li>Dried fruits</li>
            </ul>
            <p><strong>4. Fiber-rich</strong> foods help alleviate constipation and promote smooth bowel movement during pregnancy. Foods include:</p>
            <ul>
                <li>Oats</li>
                <li>Whole grain bread</li>
                <li>Legumes</li>
                <li>Fruits</li>
                <li>Vegetables</li>
            </ul>
            <p><strong>5. Iodine</strong> is necessary for the fetal brain and nerve development. Foods include:</p>
            <ul>
                <li>Cheese</li>
                <li>Milk</li>
                <li>Fish</li>
                <li>Fortified bread and cereal</li>
                <li>Iodized salt</li>
                <li>Yogurt</li>
            </ul>
            <p><strong>6. Protein</strong> is essential for fetal tissue development and also helps in repairing the breast and uterine muscles. The foods include:</p>
            <ul>
                <li>Fish</li>
                <li>Lean meat</li>
                <li>Dairy</li>
                <li>Eggs</li>
                <li>Legumes</li>
                <li>Seeds</li>
                <li>Nuts</li>
            </ul>
            <p><strong>7. Vitamin B12</strong> is essential for cell division and folate metabolism during pregnancy. Foods include:</p>
            <ul>
                <li>Meat</li>
                <li>Fish</li>
                <li>Eggs</li>
                <li>Poultry</li>
                <li>Milk and milk products</li>
            </ul>
            <p><strong>8. Vitamin D</strong> is essential for the skeletal development of the fetus. Foods include:</p>
            <ul>
                <li>Vitamin D fortified milk</li>
                <li>Salmon</li>
                <li>Tuna</li>
                <li>Mackerel</li>
                <li>Eggs</li>
                <li>Mushrooms</li>
                <li>Cereals</li>
            </ul>
            <p><strong>9. Vitamin C </strong> is essential for the teeth and bone development in the baby and is present in fruits and vegetables. Include foods like:</p>
            <ul>
                <li>Yellow and red color bell peppers</li>
                <li>Cabbage</li>
                <li>Broccoli</li>
                <li>Strawberries</li>
                <li>Citrus</li>
                <li>Brussels sprouts</li>
            </ul>
            <br><br><br>
            <h3>Foods To Avoid In The Second Month Of Pregnancy</h3>
            <p>Here are some foods that you must avoid during the second month:</p>
            <ul>
                <li>Avoid undercooked meat and poultry.</li>
                <li>Do not eat raw eggs as they may contain salmonella.</li>
                <li>Avoid soft cheeses like brie, ricotta, Camembert, blue cheese, and feta .</li>
                <li>Raw bean sprouts, pre-prepared pâté, sandwich meats, and salads must be avoided as they may contain listeria bacteria.</li>
                <li>Avoid unpasteurized juice, cider, and milk as they may contain E.coli or listeria bacteria .</li>
                <li>Avoid swordfish, shark, tilefish, and king mackerel as they contain a high level of mercury. Also avoid fish like freshwater salmon, bass, bluefish, trout, pike, and walleye that contain high levels of PCB</li>
            </ul>
            <br><br><br><br>
            
            
            
            
        </div>
    </div><br><br>

    <div class="weekinfo bg-light p-5" id="Drinks">
        <div class="container">
            <div class="title1">
                <h3>Drinks</h3><br><br>
            </div>
            <br><br>
            <p>Experts are still unsure exactly how much – if any – alcohol is completely safe for you to have while you're pregnant, so the safest approach is not to drink at all while you're expecting.</p>
            <h3>Is it safe to drink alcohol when pregnant?</h3>
            <p>The Chief Medical Officers for the UK recommend that if you're pregnant or planning to become pregnant, the safest approach is not to drink alcohol at all to keep risks to your baby to a minimum.
            Drinking in pregnancy can lead to long-term harm to the baby, with the more you drink, the greater the risk.
            </p>
            <br>
            <h3>How does alcohol affect my unborn baby?</h3>
            <p>When you drink, alcohol passes from your blood through the placenta and to your baby.
            A baby's liver is one of the last organs to develop and does not mature until the later stages of pregnancy.
            Your baby cannot process alcohol as well as you can, and too much exposure to alcohol can seriously affect their development.
            Drinking alcohol, especially in the first 3 months of pregnancy, increases the risk of miscarriage, premature birth and your baby having a low birthweight.
            Drinking after the first 3 months of your pregnancy could affect your baby after they're born.
            The risks are greater the more you drink. The effects include learning difficulties and behavioural problems.
            Drinking heavily throughout pregnancy can cause your baby to develop a serious condition called foetal alcohol syndrome (FAS).
            Symptoms include:
            </p>
            <ul>
                <li>poor growth</li>
                <li>distinct facial features</li>
                <li>learning and behavioural problems</li>
            </ul>
            <p>Drinking less heavily, and even drinking heavily on single occasions, may be associated with lesser forms of FAS. The risk is likely to be greater the more you drink.</p>
            <br><br>
            <h3>How to avoid alcohol in pregnancy</h3>
            <p>It may not be as difficult as you think to avoid alcohol completely during pregnancy, as many women go off the taste of alcohol early in pregnancy.
            Most women do give up alcohol once they know they're pregnant or when they're planning to become pregnant.
            Women who find out they're pregnant after already having drunk in early pregnancy should avoid further drinking.
            However, they should not worry unnecessarily, as the risks of their baby being affected are likely to be low.
            If you're concerned, talk to a midwife or doctor.
            </p><br><br>
            <h3>What is a unit of alcohol?</h3>
            <p>If you do decide to drink when you're pregnant, it's important to know how many units you are consuming.
            One UK unit is 10 millilitres (ml) – or 8 grams – of pure alcohol. This is equal to:  
            </p>
            <ul>
                <li>just under half a pint of cider (218ml) at 4.5% alcohol by volume (ABV: you can find this on the label)</li>
                <li>just under half a pint of beer (250ml) at 4% ABV</li>
                <li>a single measure of spirit (25ml), such as whisky, gin, rum or vodka, at 40% ABV</li>
                <li>just under half a standard glass of wine (76ml) at 13% ABV</li>
            </ul><br><br><br>
        </div>
    </div><br><br>

    <div class="weekinfo bg-light p-5" id="Sports">
        <div class="container">
            <div class="title1">
                <h3>Sports</h3><br><br>
            </div>
            <h3>Week 5: Swimming — the Ideal Pregnancy Cardio Workout</h3>
            <p>You might not want to slip into a teeny bikini at 5 weeks pregnant, but consider this: Swimming is a great way to get and stay fit. It's a fun, safe, low-impact exercise that reaps great cardiovascular benefits. Like any aerobic exercise, swimming boosts your body's ability to use oxygen, which is good for you and your baby. Plus, doing laps improves circulation and muscle tone and increases your endurance. Like any exercise, swimming also makes you feel less tired and enables you to sleep better. And for those lucky ladies who are muddling through morning sickness, a dip may counteract the queasies and energize you. If you're up to it, try to swim for at least 20 minutes three to four days a week.</p>
            <br><br>
            <h3>Week 6: Work Out When You're Nauseous</h3>
            <p>If the queasies have you down at 6 weeks pregnant, try stepping outside for a brisk walk. Chances are you'll feel better, both from the fresh air and the exercise, after 15 minutes. Other workouts are fine, too, if they sit well with your stomach. Just make sure you have a tummy-approved snack (nothing that's likely to come back up) before and after you work out. And don't forget to stay hydrated!</p><br><br>
            <h3>Week 7: Finding Time for Workouts</h3>
            <p>It's one thing to make the commitment to exercise — but it's another to find a slot for it in your busy (and nauseous) schedule at 7 weeks pregnant. The best strategy is to block out a specific time in your day for working out rather than waiting until you find half an hour to get around to it (hint: you never will). If your schedule's already double-booked, build exercise into your everyday life: Get off the bus two stops from the office and walk the rest of the way. Park your car in a faraway spot at the mall instead of cruising for the closest. Use the stairs instead of the elevator. Every step counts!</p><br><br>
            <h3>Week 8: Do Not Do These Workouts While Pregnant</h3>
            <p>A quick list of workout no-nos when you're expecting: Don't hold your breath while you exercise: both you and your baby need a constant flow of oxygen. Don't try jerky or twisting motions (no need to add insult to your already stressed-out joints). And don't challenge your sense of balance or risk any sort of trauma to your abdomen. At 8 weeks pregnant, keep in mind that soon you'll have less oxygen available for exercise, so stop when you feel fatigued and stay well hydrated. And once you reach your second trimester, don't exercise on your back (don't worry — we'll remind you again when the time hits).</p>
            <br><br><br>
        </div>
    </div><br><br>

    <div class="weekinfo bg-light p-5" id="Tests">
        <div class="container">
            <div class="title1">
                <h3>Tests</h3><br><br>
            </div>
            <br><br><br>
            <h3>Medical tests in the second month of pregnancy</h3>
            <p>Since this is your first medical visit, your health-care provider will conduct a number of routine tests. These will include a Pap smear to check for cervical abnormalities and swabs to check for infection, as well as urine and blood tests.
            Urine testing is done to check for the presence of the following:
            </p>
            <ul>
                <li>protein, which is a possible sign of kidney problems or pregnancy-induced hypertension</li>
                <li>sugar, which is a sign of diabetes</li>
            </ul>
            <p>Routine blood testing is done to assess the following:</p>
            <ul>
                <li>hemoglobin and iron level, to check for anemia</li>
                <li>infectious diseases such as HIV or hepatitis B</li>
                <li>ABO blood grouping and rhesus (Rh) factor</li>
                <li>immunities, especially to rubella and chicken pox</li>
                <li>genetic diseases such as sickle cell anemia or thalassemia</li>
            </ul>
            <p>You may also be given the option of undergoing a nuchal translucency measurement test. This test is usually done at 10 to 14 weeks of pregnancy. Using ultrasound, the fluid space at the back of the unborn baby’s neck is measured. This result is used, along with the mother’s age and the hormone levels in her blood, to determine the risk that the baby has a chromosomal abnormality. Because this test only estimates the chances of a baby having the disease, a positive result, combined with other abnormal findings, will mean you will be offered a diagnostic test such as amniocentesis or chorionic villus sampling. These diagnostic tests can definitively tell you about your baby’s chromosomes.</p>
            <br><br><br>
        </div>
    </div><br><br>
    <div class="weekinfo bg-light p-5" id="Warnings">
        <div class="container">
            <div class="title1">
                <h3>Warnings</h3><br><br>
            </div>
            <br><br><br>
            <p>During the first trimester it is important to contact your doctor if you experience any type of vaginal bleeding. The more red in color the blood is, the more significant it is. In addition, if your bleeding is accompanied by pelvic or abdominal pain, you need to contact your doctor. This could be a sign of either an early miscarriage, a threatened miscarriage or even possibly something far more dangerous, such as an ectopic pregnancy, which is a pregnancy in the fallopian tubes. If you have severe nausea and vomiting and you can’t keep anything down, you feel dizzy or light headed, you need to contact your doctor as you may need hospitalization and IV fluid hydration. If you have burning on your urination, this could manifest as a bladder infection. And if untreated, this can lead to significant complications with your pregnancy. Finally, if you’re having any type of unusual vaginal discharge or fevers, you should also contact your doctor to be ruled out for sexually transmitted diseases and infection that could affect the health of your baby.</p>
        </div>
    </div><br><br>

<?php require 'const_user/footer.php'; ?>
