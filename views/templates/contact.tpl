<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br>
            <br>
            {if $contact === 0}
                <form method="post" id="contact" action="">
                    <div class="form-row">
                        <div class="col-md-6">
                            <fieldset class="form-group">
                                <label for="nom">Nom :</label>
                                <div>
                                    <input class="form-control" type="text" id="nom" name="nom"  required>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset class="form-group">
                                <label for="prenom">Prénom :</label>
                                <div>
                                    <input class="form-control" type="text" id="prenom" name="prenom" required>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-8">
                            <fieldset class="form-group">
                                <label for="email">Adresse Email :</label>
                                <div>
                                    <input class="form-control" type="email" id="email" name="email" required>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-4">
                            <fieldset class="form-group">
                                <label for="phoneNumber">Téléphone :</label>
                                <div>
                                    <input class="form-control" placeholder="0473665457" type="tel" pattern="^0[0-9]{10}"  maxlength="10" id="tel" name="tel"  required>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                        <fieldset class="form-group">
                            <label for="sujet">Sujet :</label>
                            <div>
                                <input class="form-control" type="text" id="sujet" name="sujet" maxlength="75" required>
                            </div>

                        </fieldset class="form-group">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                        <fieldset class="form-group">
                            <label for="message">Message :</label>
                            <div>
                                <textarea oninput="count()" id="message" name="message" minlength="20" maxlength="250" class="form-control" rows="10" cols="20" required></textarea>
                            </div>
                        </fieldset class="form-group">
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="btn btn-danger" name="submit">
                            <span>Envoyer votre message</span>
                        </button>
                    </div>
                    <br>
                </form>
            {elseif $contact === 1}
                1
            {elseif $contact === 2}
                2
            {/if}
        </div>
    </div>
</div>
