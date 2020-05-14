<?php $pagetitle = "ParIciSainté"; ?>
<?php include 'partials/header.php'; ?>

<div class="loader-container">
    <div class="loader">
    </div>
</div>

<div class="container">
    <main>
        <h1 id="actu">Bienvenue sur le site de <strong>ParIciSainté</strong></h1>
        <section class="actu-club">

            <h2>Actualité du club</h2>
            <?php foreach($articlesList as $article): ?>
                <article>
                <div class="articles">
                    <div class="scale">
                        <a href="/paricisainte/public/article?id=<?= htmlspecialchars($article['id']) ?>">
                            <img class="img-actu" src="img/<?= htmlspecialchars($article['img']) ?>" alt="article actualité"/>
                        </a>
                    </div>
                    <div class="article-content">
                        <div class="article-title">
                            <a href="/paricisainte/public/article?id=<?= htmlspecialchars($article['id']) ?>">
                                <h3><?= htmlspecialchars($article['title']) ?></h3>
                            </a>
                        </div>

                        <hr>
                        <div class="intro-article">
                            <p><?= substr(htmlspecialchars($article['content']), 0 , 80). '...' ?></p>
                        </div>
                        <div class="lien-article">
                            <a href="/paricisainte/public/article?id=<?= htmlspecialchars($article['id']) ?>">Lire la suite</a>
                        </div>
                    </div>
                </div>
                </article>
            <?php endforeach; ?>
            <article class="media">
                <h2 id="media">Médias</h2>
                <div class="media-img">
                    <div class="photo-list">
                        <img src="../public/img/asse_fcn_par_ici_sainte.jpg" alt="parcage stéphanois à labeaujoire">
                    </div>
                    <div class="photo-list">
                        <img src="../public/img/strasbourg_asse_par_ici_sainte.jpg" alt="parcage stéphanois à la meinau">
                    </div>
                    <div class="photo-list">
                        <img src="../public/img/asse_om_par_ici_sainte.jpg" alt="en kop nord photo de la pelouse">
                    </div>
                    <div class="photo-list">
                        <img src="../public/img/guingamp_asse_par_ici_sainte.jpg" alt="parcage stéphanois au roudourou">
                    </div>
                </div>
            </article>
        </section>
        <aside>
            <h2 id="prochain-dep">Prochain Déplacement</h2>
            <div class="match-futur">   
                <div class="content">
                    <div class="match-header">
                        <div class="match-description">
                            <p><br> Stade GEOFFROY-GUICHARD <br> 1/2 final de coupe de france</p>

                        </div>
                </div>
                    <div class="match-body">
                        <h3>Jeudi 05 Mars 2020 <br> 21h00</h3>
                        <img src="../public/img/logo/logo4.png" alt="logo as saint-etienne">
                        <p class="versus">VS</p>
                        <img src="../public/img/logo/st_rennes.png" alt="logo stade rennais">
                    </div>
                </div>
            </div>
            <h2 id="classement">Classement</h2>
            <div class="classement">
                <h3 class="l1">Ligue1 2019 - 2020</h3>
                <table class="table-classement">
                    <thead>
                        <tr>
                            <th colspan="2">Club</th>
                            <th>Pts</th>
                            <th>J</th>
                            <th>G</th>
                            <th>N</th>
                            <th>P</th>
                            <th>Bp</th>
                            <th>Bc</th>
                            <th>Diff.</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Paris-SG</td>
                            <td>68</td>
                            <td>27</td>
                            <td>22</td>
                            <td>2</td>
                            <td>3</td>
                            <td>75</td>
                            <td>24</td>
                            <td>51</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Marseille</td>
                            <td>56</td>
                            <td>28</td>
                            <td>16</td>
                            <td>8</td>
                            <td>4</td>
                            <td>41</td>
                            <td>29</td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Rennes</td>
                            <td>50</td>
                            <td>28</td>
                            <td>15</td>
                            <td>5</td>
                            <td>8</td>
                            <td>38</td>
                            <td>24</td>
                            <td>14</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Lille</td>
                            <td>49</td>
                            <td>28</td>
                            <td>15</td>
                            <td>4</td>
                            <td>9</td>
                            <td>35</td>
                            <td>27</td>
                            <td>8</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Reims</td>
                            <td>41</td>
                            <td>28</td>
                            <td>10</td>
                            <td>11</td>
                            <td>7</td>
                            <td>26</td>
                            <td>21</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Nice</td>
                            <td>41</td>
                            <td>28</td>
                            <td>11</td>
                            <td>8</td>
                            <td>9</td>
                            <td>41</td>
                            <td>38</td>
                            <td>3</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Lyon</td>
                            <td>40</td>
                            <td>28</td>
                            <td>11</td>
                            <td>7</td>
                            <td>10</td>
                            <td>42</td>
                            <td>27</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Montpellier</td>
                            <td>40</td>
                            <td>28</td>
                            <td>11</td>
                            <td>7</td>
                            <td>10</td>
                            <td>35</td>
                            <td>34</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Monaco</td>
                            <td>40</td>
                            <td>28</td>
                            <td>11</td>
                            <td>7</td>
                            <td>10</td>
                            <td>44</td>
                            <td>44</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Angers</td>
                            <td>39</td>
                            <td>28</td>
                            <td>11</td>
                            <td>6</td>
                            <td>11</td>
                            <td>28</td>
                            <td>33</td>
                            <td>-5</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Strasbourg</td>
                            <td>38</td>
                            <td>27</td>
                            <td>11</td>
                            <td>5</td>
                            <td>11</td>
                            <td>32</td>
                            <td>32</td>
                            <td>0</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Bordeaux</td>
                            <td>37</td>
                            <td>28</td>
                            <td>9</td>
                            <td>10</td>
                            <td>9</td>
                            <td>40</td>
                            <td>34</td>
                            <td>6</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Nantes</td>
                            <td>37</td>
                            <td>28</td>
                            <td>11</td>
                            <td>4</td>
                            <td>13</td>
                            <td>28</td>
                            <td>31</td>
                            <td>-3</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>Brest</td>
                            <td>34</td>
                            <td>28</td>
                            <td>8</td>
                            <td>10</td>
                            <td>10</td>
                            <td>34</td>
                            <td>37</td>
                            <td>-3</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>Metz</td>
                            <td>34</td>
                            <td>28</td>
                            <td>8</td>
                            <td>10</td>
                            <td>10</td>
                            <td>27</td>
                            <td>35</td>
                            <td>-8</td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>Dijon</td>
                            <td>30</td>
                            <td>28</td>
                            <td>7</td>
                            <td>9</td>
                            <td>12</td>
                            <td>27</td>
                            <td>37</td>
                            <td>-10</td>
                        </tr>
                        <tr class="saint-etienne">
                            <td>17</td>
                            <td>Asse</td>
                            <td>30</td>
                            <td>28</td>
                            <td>8</td>
                            <td>6</td>
                            <td>14</td>
                            <td>29</td>
                            <td>45</td>
                            <td>-16</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>Nîmes</td>
                            <td>27</td>
                            <td>28</td>
                            <td>7</td>
                            <td>6</td>
                            <td>15</td>
                            <td>29</td>
                            <td>44</td>
                            <td>-15</td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>Amiens</td>
                            <td>23</td>
                            <td>28</td>
                            <td>4</td>
                            <td>11</td>
                            <td>13</td>
                            <td>31</td>
                            <td>50</td>
                            <td>-19</td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>Toulouse</td>
                            <td>13</td>
                            <td>28</td>
                            <td>3</td>
                            <td>4</td>
                            <td>21</td>
                            <td>22</td>
                            <td>58</td>
                            <td>-36</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <h2 id="association">handi-VERTS</h2>
            <div class="handi-verts">
                <p>Cette année l'association handi-VERTS organise son tournoi annuel au mois de juin sous réserve que le covid19 ais été éloigné de notre pays.</p>
                <img src="../public/img/tournament_poster.jpg" alt="affiche du tournoi" />
            </div>
        </aside>
    </main>
</div>
<?php include 'partials/footer.php'; ?>
