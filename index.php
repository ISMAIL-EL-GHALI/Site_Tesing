<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $user = filter_var($_POST['nom'], FILTER_SANITIZE_STRING);
  $email =  filter_var( $_POST['email'] , FILTER_SANITIZE_EMAIL) ;
  $cell = filter_var($_POST['tele'] , FILTER_SANITIZE_NUMBER_INT);
  $msg = filter_var($_POST['mesg'] , FILTER_SANITIZE_STRING);


  $headers = 'From : '.$email. '\r\n';
  $from ='ghali.ismail11@gmail.com';
  $subject = 'Contact form';
  mail($from ,$subject ,$msg,$headers);

}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Boussole Pro</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Css/bootstrap.min.css">
    <link rel="stylesheet" href="Css/all.min.css">
    <link rel="stylesheet" href="Css/animate.min.css">
    <link rel="stylesheet" href="Css/main.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light  fixed-top " >
        <div class="container">
            <!-- <a class="navbar-brand" style="color: #fff;" href="#">Navbar</a> -->
            <img loading="lazy" src="img/lo.png" width="300px" alt="" srcset="">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> --><i class="fas fa-bars"></i>
            </button>
            <div  class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav  ml-auto">
                    <li class="nav-item ">
                        <a class="nav-link active" href="#" data-scroll="notreMession"><i class="fa-fw fab fa-black-tie"></i> Notre mission</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll="service"> <i class="fa-fw fas fa-boxes"></i> Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll="pricing"><i class="ffa-fw fas fa-comment-dollar"></i> Abonnement</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll="testMonial"><i class="fa-fw fas fa-quote-left"></i> Témoignages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll="contact"><i class="fas fa-envelope"></i> Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header>
      <video src="Vedio/bg-video.mp4" autoplay loop muted></video>
      <div class="content d-flex align-items-center">
        <div class="container text-center">
            <h2 class="text-uppercase"><span>Boussole Pro</span> , Savoir se diriger avec sens spirituel et
                professionnel</h2>
                <a href="#">Rejoindre une Masterclass</a>
        </div>
      </div>
    </header>

    <!--Qui sommes-nous-->
   <div class="sec-nous text-center">
       <div class="container">
           <i class="fas fa-bookmark fa-2x"></i>
            <h1> Qui sommes nous ? </h1>
                <p class="parag wow animate__backInDown" data-wow-duration="0.6s" data-wow-offset="190">
                    Notre réseau s’appelle Boussole Pro et notre boussole tend toujours vers ce hadith 
                    du meilleur des hommes sws : At-Tabarânî que Dieu le bénisse a rapporté selon Abdullah
                    Ibn 'Omar qu’Allah les agrées, que le Messager d’Allah a dit : « L’homme le plus aimé 
                    d’Allah est celui qui est plus utile aux hommes. Et l’œuvre la plus aimée d’Allah est
                    une joie procurée à un musulman, ou un souci dissipé, ou une dette payée, ou une faim
                    satisfaite. Certes, que j’accompagne un frère à régler un besoin est plus aimé de moi 
                    que de faire une retraite (ia'tikaf) d’un mois à cette mosquée (Al Masjd Annabawi à Médine) »
                </p>
        </div>
    </div>

    <!--Nos valeurs-->
    <div class="bg-img lazy">
        <div class="container">
            <div class="services">
                <h1>Nos valeurs</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 text-center wow animate__fadeInLeft" data-wow-duration="0.6s" data-wow-offset="190">
                    <div class="icon text-center">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h2 class="card-title">ATTIKA</h2>
                    <p>
                        Établir des liens de confiance solides avec nos abonné-e-s, 
                        l'équipe professionnelle est à leur disposition à chaque évolution
                         de leurs besoins professionnels.
                    </p>
                </div>

                <div class="col-lg-4 col-md-12 text-center wow animate__fadeInUp" data-wow-duration="0.6s" data-wow-offset="190">
                    <div class="icon text-center">
                        <i class="fas fa-thumbs-up"></i>
                    </div>
                    <h2 class="card-title">AL I7SSAN</h2>
                    <p>
                        Être force de proposition de valeur pour nos abonné-e-s et
                         protéger le réseau via des indicateurs de qualité pour garder la 
                         qualité et la confiance dans la durée.
                    </p>
                </div>

                <div class="col-lg-4 col-md-12 text-center wow animate__fadeInRight" data-wow-duration="0.6s" data-wow-offset="190">
                    <div class="icon text-center">
                        <i class="fas fa-heart"></i>
                    </div>
                    <h2 class="card-title">ANIYA</h2>
                    <p>
                        La boussole est présente dans chaque connexion qu'on fait,
                        dans chaque projet qu'on réalise, dans chaque rencontre physique
                         et dans chaque instant pour servir nos abonné-e-s.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--Mission-->

    <div class="mission text-center" id="notreMession">
        <div class="container">
            <i class="fas fa-cogs fa-2x"></i>
            <h1>Notre mission</h1>
            <p class="p wow animate__backInDown" data-wow-duration="0.6s" data-wow-offset="190">
                 Bâtir un réseau international éthique à impact social. Construire une infrastructure permettant
                  la connexion professionnelle de nos abonné-e-s avec un suivi de qualité pour alimenter le réservoir 
                  opportunité et développer un écosystème productif pour la communauté.
            </p>
        </div>
    </div>

<!--Pour quoi nous choisir-->

    <div class="pourqouichoisir lazy">
        <div class="container">
            <div class="services text-center">
                <h1>Pour quoi nous choisir</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center wow animate__fadeInLeft" data-wow-duration="0.6s" data-wow-offset="190">
                    <div class="icon text-center">
                        <i class="fas fa-plus-square"></i>
                    </div>
                    <p>Agrandir et renforcer ton réseau professionnel en France et à l’étranger
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 text-center wow animate__fadeInUp" data-wow-duration="0.6s" data-wow-offset="190">
                    <div class="icon text-center">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <p>
                        Avoir sous la main une application avec plus d’une centaine d’abonné-e-s 
                        pros avec qui tu peux facilement interagir et présents en France, Canada,
                         Middle East, Maghreb… dans de nombreux différents secteurs d’activités.
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 text-center wow animate__fadeInRight" data-wow-duration="0.6s" data-wow-offset="190">
                    <div class="icon text-center">
                        <i class="fas fa-globe-asia"></i>
                    </div>
                    <p> Intégrer un réseau de qualité où tu y accèdes par
                         recommandation. Un réseau où nous évaluons sans cesse
                          la ponctualité, la qualité des échanges et des interactions
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 text-center wow animate__fadeInDown" data-wow-duration="0.6s" data-wow-offset="190">
                    <div class="icon text-center">
                        <i class="fas fa-server"></i>
                    </div>
                    <p>Augmenter  ton CA si tu es entrepreneur avec
                         le Boost pro. L’équipe mobilise tout le réseau durant 
                         2 semaines et communique à fond sur tes produits/services
                    </p>
                </div>
            </div>
        </div>
    </div>

      <!--Les Question du site -->

   <div class="quest">
       <div class="container">
           <h1>BOUSSOLE PRO A LA SOLUTION POUR VOUS</h1>
           <h3>A quelles questions on répond ?</h3>
           <p class="wow animate__fadeInDown" data-wow-duration="0.6s" data-wow-offset="190"><i aria-hidden="true" class="far fa-check-circle"></i> Si vous pensez que le réseau est chronophage ?<br><br>
            <i aria-hidden="true" class="far fa-check-circle"></i> Si vous avez des difficultés à trouver de l’information utile pour vous d’un point de vue professionnel ?<br><br>
            <i aria-hidden="true" class="far fa-check-circle"></i> Si vous avez envie d’encourager les opportunités professionnelles de votre communauté ?</p>
       </div>
   </div>
    
    <!--Nos service-->

   
    <!--Start Section Services -->
    <section id="service" class="service  lazy" id="service">
      <div class="container">
          <h2 class="display-5 text-center">Nos services</h2>
          <!--Start Ser Box -->
          <div class="ser-box mt-5">
              <div class="row mb-4">
                  <div class="col-md-6">
                      <div class="media">
                          <div class="row">
                              <div class="col-12 col-sm-2 col-lg-2 wow animate__fadeInLeft" data-wow-duration="0.6s" data-wow-offset="190">
                                <i class="fa fa-lightbulb fa-fw mr-sm-3" aria-hidden="true"></i>
                              </div>
                              <div class="col-12 col-sm-10 col-lg-10 wow animate__fadeInLeft" data-wow-duration="0.6s" data-wow-offset="190">
                                  <div class="media-body">
                                      <h4>Sprint pro</h4>
                                      <p>
                                        Vous avez des besoins des conseils de professionnels, de recommandations
                                         qui soient basées sur des critères objectifs, et accéder à des personnalités 
                                         positives, des informations pourrant se transformer en opportunités pour vous
                                          et pour vos proches. Boussole Pro synchronise la relation pour vous.
                                      </p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div> <!-- End Service One  -->
                  <div class="col-md-6">
                      <div class="media">
                          <div class="row">
                              <div class="col-12 col-sm-2 col-lg-2 wow animate__fadeInRight" data-wow-duration="0.6s" data-wow-offset="190">  
                                  <i class="fa fa-boxes fa-fw mr-sm-3" aria-hidden="true"></i>
                              </div>
                              <div class="col-12 col-sm-10  col-lg-10 wow animate__fadeInRight" data-wow-duration="0.6s" data-wow-offset="190">
                                  <div class="media-body ">
                                      <h4>Shoura Pro</h4>
                                      <p>
                                        Boussole Pro rassemble autour de vous des compétences,
                                         des points de vue vous apportant de la valeur ajoutée, peut importe votre problématique professionnelle. Ajoutez des informations supplémentaires concernant le service.
                                      </p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div> <!-- End Service Two  -->
              </div> <!-- End Row One -->

              <!--Start Row Two-->
              <div class="row mb-4">
                  <div class="col-md-6">
                      <div class="media">
                          <div class="row">
                              <div class="col-12 col-sm-2  col-lg-2 wow animate__fadeInLeft" data-wow-duration="0.6s" data-wow-offset="190">
                                  <i class="fa fa-magic fa-fw mr-sm-3" aria-hidden="true"></i>
                              </div>
                              <div class="col-12 col-sm-10  col-lg-10  wow animate__fadeInLeft" data-wow-duration="0.6s" data-wow-offset="190">
                                  <div class="media-body">
                                      <h4>Meet Pro</h4>
                                      <p>
                                        Un café, un restaurant avec Boussole Pro, en France ailleurs dans le monde. Désormais rien de plus facile d’investir
                                         votre temps avec des personnes qui vous tire vers le haut professionnellement et où on se tire tous vers le Haut. Avec le covid, ce service est proposé à distance « e-meetpro ».
                                      </p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div> <!-- End Service Three  -->

                  <div class="col-md-6">
                      <div class="media">
                          <div class="row">
                              <div class="col-12 col-sm-2  col-lg-2 wow animate__fadeInRight" data-wow-duration="0.6s" data-wow-offset="190">
                                <i class="fa fa-clipboard-check fa-fw mr-sm-3" aria-hidden="true"></i>
                              </div>
                              <div class="col-12 col-sm-10  col-lg-10   wow animate__fadeInRight" data-wow-duration="0.6s" data-wow-offset="190">
                                  <div class="media-body">
                                      <h4>Boost Pro</h4>
                                      <p>
                                        Un service pour nos entrepreneurs abonné-e-s. 
                                        Encourageons la réussite des entrepreneurs de
                                         notre communauté pour plus de résilience économique.
                                      </p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div> <!-- End Service Four  -->

                  <div class="col-md-6">
                    <div class="media">
                        <div class="row">
                            <div class="col-12 col-sm-2  col-lg-2 wow animate__fadeInRight" data-wow-duration="0.6s" data-wow-offset="190">
                              <i class="fa fa-search fa-fw mr-sm-3" aria-hidden="true"></i>
                            </div>
                            <div class="col-12 col-sm-10  col-lg-10   wow animate__fadeInLeft" data-wow-duration="0.6s" data-wow-offset="190">
                                <div class="media-body media1">
                                    <h4 style="color: rgb(119, 119, 233); font-size: 25px;">Relais BP</h4>
                                    <p>
                                      Vous avez également accès à nos relais BP. 
                                      Vous cherchez un conseil dans le domaine de l'immobilier,
                                       de l'export et des RH. Nos relais sont disponibles gratuitement
                                        pour nos abonné-e-s via un sprint pro de 15 minutes ou un shoura Pro 1h.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End Service five  -->

                <div class="col-md-6">
                  <div class="media">
                      <div class="row">
                          <div class="col-12 col-sm-2  col-lg-2 wow animate__fadeInRight" data-wow-duration="0.6s" data-wow-offset="190">
                            <i class="fa fa-star fa-fw mr-sm-3" aria-hidden="true"></i>
                          </div>
                          <div class="col-12 col-sm-10  col-lg-10 wow animate__fadeInRight" data-wow-duration="0.6s" data-wow-offset="190">
                              <div class="media-body media1">
                                  <h4 style="color: rgb(119, 119, 233); font-size: 25px;">Expert Bp</h4> 
                                  <p>
                                    Avec Boussole Pro, vous avez accès également à une liste d'expert recommandés et testés.
                                    Actuellement, deux experts sont disponibles avec un sprint pro gratuit pour nos abonné-e-s :
                                    Sonia, Avocat au barreau de Paris
                                    Mohamed, Expert en optimisation fiscale
                                    Au fur et à mesure de notre développement, nous allons proposer d'autres experts et d'autres relais BP.
                                  </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div> <!-- End Service six  -->

              </div> <!-- End Row One -->

            
              </div> <!-- End Row Three -->
          </div> <!-- End Box Services -->
      </div> <!-- End Container -->
  </section>
  <!--End Section Services -->







        <!--Animation circle-->
        <div class="padRo text-center">
                <div class="container">
                    <p class="note">Nos chiffres depuis le lancement de Boussole Pro le 17/09/2020</p>
                    <div class="in wow animate__fadeInLeft" data-wow-duration="0.6s" data-wow-offset="190">
                      <div class="bb">
                            <div class="rot">
                                <div class="texte">
                                    <p>340</p>
                                </div>   
                            </div>
                            <p class="par">Sprint pro</p>
                        </div>
                    </div>

                    <div class="in wow animate__fadeInLeft" data-wow-duration="0.6s" data-wow-offset="190">
                        <div class="bb">
                            <div class="rot">
                                <div class="texte">
                                    <p>41</p>
                                </div>   
                            </div>
                            <p class="par">Shoura Pro</p>
                        </div>
                    </div>

                    <div class="in wow animate__fadeInUp" data-wow-duration="0.6s" data-wow-offset="190">
                        <div class="bb">
                            <div class="rot">
                                <div class="texte">
                                    <p>18</p>
                                </div>   
                            </div>
                            <p class="par">Meet Pro</p>
                        </div>
                    </div>

                    <div class="in wow animate__fadeInRight" data-wow-duration="0.6s" data-wow-offset="190">
                        <div class="bb">
                            <div class="rot">
                                <div class="texte">
                                    <p>823</p>
                                </div>   
                            </div>
                            <p class="par">Boost Pro</p>
                        </div>
                    </div>


                    <div class="in wow animate__fadeInRight" data-wow-duration="0.6s" data-wow-offset="190">
                        <div class="bb">
                            <div class="rot">
                                <div class="texte">
                                    <p>120</p>
                                </div>   
                            </div>
                            <p class="par">Abonné-e-s</p>
                        </div>
                    </div>
                     
                    
              </div>
        

    <!--Pricing table-->
  <div class="pricing-table text-center" id="pricing">
        <div class="container">
            <i class="fas fa-euro-sign fa-2x"></i>
          <h2 class="text-uppercase">Abonnement</h2>
          <p class="section-desc wow animate__fadeInUp" data-wow-duration="0.6s" data-wow-offset="190">
            Boussole Pro rassemble autour de vous des compétences, des points de vue vous apportant
             de la valeur ajoutée, peut importe votre problématique professionnelle.
          </p>
          <!--Alert-->
          <div class="alert alert-primary wow animate__bounceInDown" data-wow-duration="0.6s" data-wow-offset="190" style="font-family: 'Kaisei Decol', serif;" role="alert">
            <i class="fas fa-info-circle"></i> 
            Si vous vous inscrivez chez nous pour un année, pour le premier mois est gratuit.
          </div>
          <!--End Alert-->
          <div class="row">
            <div class="col-lg-6 col-md-6 wow animate__bounceInLeft" data-wow-duration="1s" data-wow-offset="190">
                <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Mensuel</h4>
                    <h6 class="card-subtitle mb-2 text-muted"></h6>
                    <p class="card-text"><del style="font-size: 15px;">€9810</del><sup>€</sup>9.90</p>
                    
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i aria-hidden="true" class="far fa-check-circle"></i> Accès à l'équipe de professionnels</li>
                        <li class="list-group-item"><i aria-hidden="true" class="far fa-check-circle"></i> Accès à l'application Boussole Pro en version bêta</li>
                        <li class="list-group-item"><i aria-hidden="true" class="far fa-check-circle"></i> Sprint pro illimité</li>
                        <li class="list-group-item"><i aria-hidden="true" class="far fa-check-circle"></i> 12 Meet Pro par an</li>
                        <li class="list-group-item"><i aria-hidden="true" class="far fa-check-circle"></i> 6 Shoura pro par an</li>
                        <li class="list-group-item"><i aria-hidden="true" class="far fa-check-circle"></i> Shoura Pro Observateur silencieux en illimité</li>
                        <li class="list-group-item"><i aria-hidden="true" class="far fa-check-circle"></i> Accès aux offres d'emplois et de stage</li>
                    </ul>
                    
                    <!-- <a href="#" class="card-link">Choisir</a> -->
                    <script src="https://www.paypal.com/sdk/js?client-id=ASK7rCiWFdS4FVz0vuKDgLljsDXTl5GFvN8MsWA9KEv4DTkxo4E6R9nXjJqVcb_mSGETKguAK0BmCjI4&vault=true&intent=subscription" data-sdk-integration-source="button-factory"></script>
                    <div id="paypal-button-container-P-5WY37138VX8642146MEP6ENA"></div>
                    <script>
                    paypal.Buttons({
                        style: {
                            shape: 'rect',
                            color: 'blue',
                            layout: 'vertical',
                            label: 'subscribe'
                        },
                        createSubscription: function(data, actions) {
                            return actions.subscription.create({
                            /* Creates the subscription */
                            plan_id: 'P-5WY37138VX8642146MEP6ENA'
                            });
                        },
                        onApprove: function(data, actions) {
                            alert(data.subscriptionID); // You can add optional success message for the subscriber here
                        }
                    }).render('#paypal-button-container-P-5WY37138VX8642146MEP6ENA'); // Renders the PayPal button
                    </script>
                </div>
                
            </div>
      </div>
      <div class="col-lg-6 col-md-6 wow animate__bounceInLeft" data-wow-duration="1s" data-wow-offset="190">
        <div class="card">
        <div class="card-body">
            <h4 class="card-title">Annuel</h4>
            <h6 class="card-subtitle mb-2 text-muted"></h6>
            <p class="card-text"><del style="font-size: 15px;">€9810</del><sup>€</sup>108.90</p>
            
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><i aria-hidden="true" class="far fa-check-circle"></i> Accès à l'équipe de professionnels</li>
                <li class="list-group-item"><i aria-hidden="true" class="far fa-check-circle"></i> Accès à l'application Boussole Pro en version bêta</li>
                <li class="list-group-item"><i aria-hidden="true" class="far fa-check-circle"></i> Sprint pro illimité</li>
                <li class="list-group-item"><i aria-hidden="true" class="far fa-check-circle"></i> 12 Meet Pro par an</li>
                <li class="list-group-item"><i aria-hidden="true" class="far fa-check-circle"></i> 6 Shoura pro par an</li>
                <li class="list-group-item"><i aria-hidden="true" class="far fa-check-circle"></i> Shoura Pro Observateur silencieux en illimité</li>
                <li class="list-group-item"><i aria-hidden="true" class="far fa-check-circle"></i> Accès aux offres d'emplois et de stage</li>
            </ul>
            
            <!-- <a href="#" class="card-link">Choisir</a> -->
            <div id="paypal-button-container-P-0RJ31203P6125151SMCSQ5PA"></div>
          <!-- <script src="https://www.paypal.com/sdk/js?client-id=ASK7rCiWFdS4FVz0vuKDgLljsDXTl5GFvN8MsWA9KEv4DTkxo4E6R9nXjJqVcb_mSGETKguAK0BmCjI4&vault=true&intent=subscription" data-sdk-integration-source="button-factory"></script> -->
          <script>
            paypal.Buttons({
                style: {
                    shape: 'rect',
                    color: 'blue',
                    layout: 'vertical',
                    label: 'subscribe'
                },
                createSubscription: function(data, actions) {
                  return actions.subscription.create({
                    /* Creates the subscription */
                    plan_id: 'P-0RJ31203P6125151SMCSQ5PA'
                  });
                },
                onApprove: function(data, actions) {
                  alert(data.subscriptionID); // You can add optional success message for the subscriber here
                }
            }).render('#paypal-button-container-P-0RJ31203P6125151SMCSQ5PA'); // Renders the PayPal button
          </script>
        </div>
    </div>
</div>
</div>
</div>

</div>
</div>
     <!--Rejoindr-->

     <div class="bg-f text-center  lazy">
         <div class="container">
             <h2 class=" wow animate__fadeInUp" data-wow-duration=".5s" data-wow-offset="190">Il est temps de rejoindre votre réseau Boussole Pro</h2>
             <a class="link wow animate__fadeInDown" data-wow-duration=".5s" data-wow-offset="190" target="_blanc" href="https://form.jotform.me/203356154097456">Je m'abonne</a>
         </div>
     </div>

     <!--FAQ-->
<div class="container">
  <div class="accordion">
    <div class="image-box">
      <img loading="lazy" src="./img/FAQ.jpg" alt="Accordion Image">
    </div>
    <div class="accordion-text">
      <div class="title">FAQ</div>
    <ul class="faq-text">
      <li>
        <div class="question-arrow">
          <span class="question">Comment prendre un abonnement ?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Il suffit de confirmer votre abonnement en procédant
           au paiement et notre équipe vous contactera pour email 
           pour suivre les étapes d’adhésion et pouvoir vous accueillir au mieux pour rejoindre la communauté 
           Boussole Pro.</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">Comment utiliser l’application ?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>L’application est une application web en version beta,
           l’accès est restreint uniquement aux abonné-e-s de Boussole Pro,
            vous pouvez l’utiliser avec votre mail et l’ajouter sur votre écran d’accueil. </p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">Je veux bénéficier de Shoura Pro ou Sprint pro ou Meet  
            pro ou autres services, mais je ne sais pas comment procéder ? </span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Sur l’application web, vous avez accès à tous ces services
           et en un clic, vous pouvez commander l’un des services qui 
           vous intéresse. Notre équipe est à votre disposition aussi pour 
           vous proposer des connexions en fonction de vos besoins</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">A quel moment je peux utiliser de manière effective l’application ?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Une fois le paiement reçu, vous recevrez par mail l’accès à l’application web et les autres étapes à 
          suivre pour compléter votre adhésion (fiche de profil, questionnaire networking et formulaire de recommandation).</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">A-t-on une période d’essai gratuit ?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Pas de période d’essai gratuit. Si vous prenez un abonnement annuel, un mois gratuit est compris. </p>
        <span class="line"></span>
      </li>

      <li>
        <div class="question-arrow">
          <span class="question">Quels sont les moyens de paiement disponible pour payer?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Actuellement, vous pouvez payer via Paypal ou procéder à un virement bancaire sur notre compte.   </p>
        <span class="line"></span>
      </li>

      <li>
        <div class="question-arrow">
          <span class="question">Quelles sont les devises que vous acceptez ? </span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Paypal accepte toutes les devises internationales.   </p>
        <span class="line"></span>
      </li>

      <li>
        <div class="question-arrow">
          <span class="question">Est-ce que je peux payer en dirham ? </span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Oui, vous pouvez payer en MAD, il faut ajouter la TVA de 20%. Le prix mentionné en Euro est en HT.   </p>
        <span class="line"></span>
      </li>

      <li>
        <div class="question-arrow">
          <span class="question">Quelle est la procédure de résiliation ?  </span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Vous pouvez résilier à tout moment.  </p>
        <span class="line"></span>
      </li>

      <li>
        <div class="question-arrow">
          <span class="question">Quelles sont les meilleures plages horaires pour contacter l’équipe de professionnels ?  </span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Vous pouvez nous contacter à tout moment sur le numéro Whatsapp suivant : +212620224303  </p>
        <span class="line"></span>
      </li>


    </ul>
    </div>
  </div>
  </div>


  <script>
    let li = document.querySelectorAll(".faq-text li");
    for (var i = 0; i < li.length; i++) {
      li[i].addEventListener("click", (e)=>{
        let clickedLi;
        if(e.target.classList.contains("question-arrow")){
          clickedLi = e.target.parentElement;
        }else{
          clickedLi = e.target.parentElement.parentElement;
        }
       clickedLi.classList.toggle("showAnswer");
      });
    }
  </script>

     <!--TestMonial-->

     <section class="testimonial text-center" id="testMonial">
      <div class="container-fluid">

          <div class="heading white-heading">
              Testimonial
       </div>
          <div id="testimonial4" class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x" data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">     
              <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                      <div class="testimonial4_slide">
                          <img loading="lazy" src="./img/hommee.jpeg" class="img-circle img-responsive" />
                          <p class="text-justify box sb1" >Juste un grand merci pour l’aide de l’équipe Boussole Pro. Je suis heureuse de pouvoir ainsi avancer dans mon projet et d’avoir une perspective d’avenir pour lui.</p>
                          <!-- <span style="color: honeydew;" >Om kumar Kamat</span> -->
                          <h4>Florence</h4>
                          <i class="fas fa-quote-left fa-2x"></i>
                     </div>
                  </div>
                  <div class="carousel-item">
                      <div class="testimonial4_slide">
                          <img loading="lazy" src="./img/famme.jpeg" class="img-circle img-responsive" />
                          <p class="text-justify box sb1">Une mise en relation avec un réseau d'une qualité inégalée, des rencontres enrichissantes aussi bien professionnellement qu'humainement. On se sent fort, et accompagné tout le long.</p>
                          <!-- <span style="color: honeydew;" >Kundan Kumar</span> -->
                          <h4>Nadia</h4>
                          <i class="fas fa-quote-left fa-2x"></i>
                     </div>
                  </div>
                  <div class="carousel-item">
                      <div class="testimonial4_slide">
                          <img loading="lazy" src="./img/hommee.jpeg" class="img-circle img-responsive" />
                          <p class="text-justify box sb1">Échange très agréable. Le relais BP disponible sur l'application a tout de suite compris ma situation. Il m’a donné des conseils pour envisager certaines pistes tels qu’une VIE, ou bien de l’intérim.</p>
                          <!-- <span style="color: honeydew;" >Vikash Singh</span> -->
                          <h4>Mohamed F</h4>
                          <i class="fas fa-quote-left fa-2x"></i>
                    </div>
                  </div>
                  <div class="carousel-item">
                      <div class="testimonial4_slide">
                          <img loading="lazy" src="./img/famme.jpeg" class="img-circle img-responsive" />
                          <p class="text-justify box sb1">C'est un réseau de professionnel de qualité, très à l'écoute et réactif.
                            J'ai eu des conseils personnalisé de Zohra et Mimoun que je remercie.
                            Aussi bravo à l'équipe pour leur travail!</p>
                          <!-- <span style="color: honeydew;" >Subham Singh</span> -->
                          <h4>Hajar</h4>
                          <i class="fas fa-quote-left fa-2x"></i>
                   </div>
                  </div>
                  <div class="carousel-item">
                      <div class="testimonial4_slide">
                          <img loading="lazy" src="./img/hommee.jpeg" class="img-circle img-responsive" />
                          <p class="text-justify box sb1">L'équipe BP à qui j'ai signalé être en recherche active de nouvelles opportunités d'emploi et notamment à l'étranger a été très réactive et proactive en organisant un sprint pro avec deux frères qui travaillent au moyen-orient.
                            Toujours sympa de faire connaissance avec un frère et développer son réseau. Merci à l'équipe BP</p>
                          <!-- <span style="color: honeydew;" >Anurag yadav</span> -->
                          <h4>Makram</h4>
                          <i class="fas fa-quote-left fa-2x"></i>
                     
                      </div>
                  </div>
                  <div class="carousel-item">
                      <div class="testimonial4_slide">
                          <img loading="lazy" src="./img/hommee.jpeg" class="img-circle img-responsive" />
                          <p class="text-justify box sb1">On le voit avec les chiffres ! c'est un réseau d'ACTION avant tout ! ce n'est pas juste pour faire du réseautage mais pour AGIR ! REJOINDRE BOUSSOLE PRO C'EST REJOINDRE UN RESEAU ACTIF AVEC DES SOLUTIONS POUR CHAQUE SITUATION </p>
                          <!-- <span style="color: honeydew;" >MD Sajid Khan</span> -->
                          <h4>Halim</h4>
                          <i class="fas fa-quote-left fa-2x"></i>
                     
                      </div>
                  </div>
                  <div class="carousel-item">
                      <div class="testimonial4_slide">
                          <img loading="lazy" src="./img/hommee.jpeg" class="img-circle img-responsive" />
                          <p class="text-justify box sb1">Excellente réactivité, organisation aux petits oignons, excellent suivi, je n’ai jamais vu cela </p>
                          <!-- <span style="color: honeydew;" >Anupma</span> -->
                          <h4>Khalid</h4>
                          <i class="fas fa-quote-left fa-2x"></i>
                     
                      </div>
                  </div>

                  <div class="carousel-item">
                    <div class="testimonial4_slide">
                        <img loading="lazy" src="./img/hommee.jpeg" class="img-circle img-responsive" />
                        <p class="text-justify box sb1">Un dispositif de qualité et personnalisé avec des intervenants à l’écoute et disponible pour vous accompagner tant sur le plan personnel, que professionnel. </p>
                        <!-- <span style="color: honeydew;" >Anupma</span> -->
                        <h4>Nabil</h4>
                        <i class="fas fa-quote-left fa-2x"></i>
                   
                    </div>
                </div>

                <div class="carousel-item">
                  <div class="testimonial4_slide">
                      <img loading="lazy" src="./img/hommee.jpeg" class="img-circle img-responsive" />
                      <p class="text-justify box sb1">Sprint pro très bien organisé, rapide et efficace. Échange très intéressant qui démontre la qualité du réseau Boussole Pro </p>
                      <!-- <span style="color: honeydew;" >Anupma</span> -->
                      <h4>Mounir</h4>
                      <i class="fas fa-quote-left fa-2x"></i>
                 
                  </div>
              </div>

              <div class="carousel-item">
                <div class="testimonial4_slide">
                    <img loading="lazy" src="./img/hommee.jpeg" class="img-circle img-responsive" />
                    <p class="text-justify box sb1">L'échange avec Hosni était très intéressant, aussi bien au niveau personnel que professionnel.
                      Un premier Sprint Pro de qualité à deux jours de mon inscription.
                      Un grand Merci à l'équipe Boussole Pro pour la proposition et pour l'organisation  </p>
                    <!-- <span style="color: honeydew;" >Anupma</span> -->
                    <h4>Rachid</h4>
                    <i class="fas fa-quote-left fa-2x"></i>               
                </div>
            </div>

              </div>
              <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                  <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#testimonial4" data-slide="next">
                  <span class="carousel-control-next-icon"></span>
              </a>
          </div>
      </div>
  </section>


     <!--Contact-->
     <div class="contacte" id="contact">
       <div class="container">
         <div class="row">
           <div class="col-md-8">
             <h1 class="text-center">Nos contact</h1>
             <form class="contract-form" method="POST">
              <div class="alert alert-danger" role="alert">
                Tous les chomps est obligatoire !!
              </div>
               <input class="form-control" required type="text"id="name" name="username" placeholder="Entre votre Nom"><i class="fa fa-user fa-fw"></i>
               <input class="form-control" required type="text" id="email" name="email" placeholder="Entre votre Email"><i class="fa fa-envelope fa-fw"></i>
               <input class="form-control" required type="text" id="tele" name="tele" placeholder="Entre votre phone"><i class="fa fa-phone fa-fw"></i>
               <textarea class="form-control" required id="mesg" placeholder="Message"></textarea>
               <input type="submit" id="btn" class="btn btn-success" value="Envoyer Message"><i class="fas fa-paper-plane send-icon"></i>
             </form>
           </div>
           <div class="col-md-4 info text-center">
            <i class="fa fa-phone fa-2x"></i>
            <h3><a href="tel:+212 620-224303"> Telephone</a></h3>
            <p>+212 620-224303</p>
            <i class="fa fa-envelope fa-2x " aria-hidden="true"></i>
            <h3><a href="mailto:boussole.pro.fea@gmail.com" target="_blanc">Email</a></h3>
            <p>boussole.pro.fea@gmail.com</p>

            <i class="fab fa-whatsapp fa-3x " aria-hidden="true"></i>
            <h3><a href="https://wa.me/message/BTIEMW7ZXBLWG1" target="_blanc">Whatssap</a></h3>
            <p>+212 620-224303</p>
         </div>
         </div>
       </div>
     </div>

     <!--Footer-->

      <!--Copyright-->
      <div class="copyright text-center">
        <div class="container">
          <div class="row">
            <div class="col text-left text-uppercase">
              <p>Copyright 2021 Boussole pro &copy; tous les droits réservés</p>
            </div>
            <div class="col text-right">
              <ul class="list-unstyled">
                <li>
                  <a href="https://www.facebook.com/Boussole-PRO-104865085254466" target="_blanc"><i class="fab fa-facebook fa-1x"></i></a>
                </li>
                <li>
                  <a href="linkedin.com/company/boussolepro" target="_blanc"><i class="fab fa-linkedin fa-1x"></i></a>
                </li>
                <li>
                  <a href="https://www.instagram.com/boussoleprocommunity/" target="_blanc"><i class="fab fa-instagram fa-1x"></i></a>
                </li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
<!--Scroll to top-->

<button id="tpbtn"> <i class="fas fa-arrow-up"></i> </button>

<!--Loading Scrin-->

<section class="loading-screen">

  <div class="spinner">
    <img src="./img/logo.png">
    <div class="bounce1"></div>
    <div class="bounce2"></div>
    <div class="bounce3"></div>
  </div>
</section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="Js/popper.min.js"></script>
    <script src="Js/bootstrap.min.js"></script>
    <script src="Js/main.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="Js/object-fit.js"></script>
    <script>objectFitVideos();</script>
    <script> new WOW().init(); </script>
</body>

</html>