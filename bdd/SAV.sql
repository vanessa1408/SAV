CREATE TABLE Client(
   IdCLient INT,
   NomClient VARCHAR(30),
   PrénomClient VARCHAR(30),
   PRIMARY KEY(IdCLient)
);

CREATE TABLE Adresse(
   IdAdresse INT,
   AdresseClient VARCHAR(30),
   CPClient INT,
   VilleClient VARCHAR(30),
   IdCLient INT,
   PRIMARY KEY(IdAdresse),
   FOREIGN KEY(IdCLient) REFERENCES Client(IdCLient)
);

CREATE TABLE Service(
   IdService INT,
   LibService VARCHAR(10),
   PRIMARY KEY(IdService)
);

CREATE TABLE Type_dossier(
   IdType INT,
   LibType VARCHAR(4),
   PRIMARY KEY(IdType)
);

CREATE TABLE Article(
   IdArticle INT,
   NomArticle VARCHAR(30),
   StockPhysiqueArticle INT,
   StockRebusArticle INT,
   StockSAVArticle INT,
   PRIMARY KEY(IdArticle)
);

CREATE TABLE TypeInter(
   IDTypeInter INT,
   LibTypeInter VARCHAR(30),
   PRIMARY KEY(IDTypeInter)
);

CREATE TABLE Pièce(
   IdPièce INT,
   NomPiece VARCHAR(30),
   PxPiece DECIMAL(7,2),
   StockPhysiquePiece INT,
   StockRebusPiece INT,
   StockSAVPiece INT,
   QteCommPièce INT,
   QteExpPiece INT,
   PRIMARY KEY(IdPièce)
);

CREATE TABLE Facture(
   IdFacture VARCHAR(20),
   DateFacture DATE,
   PRIMARY KEY(IdFacture)
);

CREATE TABLE Technicien(
   IdTechnicien INT,
   NomTechnicien VARCHAR(30),
   PrenomTechnicien VARCHAR(30),
   Login VARCHAR(50),
   Password VARCHAR(50),
   Mail VARCHAR(50),
   IdService INT,
   PRIMARY KEY(IdTechnicien),
   FOREIGN KEY(IdService) REFERENCES Service(IdService)
);

CREATE TABLE Commande(
   IdCommande INT,
   DateCommande DATE,
   StatutCommande VARCHAR(10),
   IdCLient INT,
   IdFacture VARCHAR(20),
   PRIMARY KEY(IdCommande),
   UNIQUE(IdFacture),
   FOREIGN KEY(IdCLient) REFERENCES Client(IdCLient),
   FOREIGN KEY(IdFacture) REFERENCES Facture(IdFacture)
);

CREATE TABLE TicketSAV(
   IdTicket INT,
   DateAppelClient DATE,
   DatePEC DATE,
   DateFermTicket DATE,
   IdType INT NOT NULL,
   IDTypeInter INT NOT NULL,
   IdCommande INT,
   IdTechnicien INT,
   IdTechnicien_1 INT,
   PRIMARY KEY(IdTicket),
   FOREIGN KEY(IdType) REFERENCES Type_dossier(IdType),
   FOREIGN KEY(IDTypeInter) REFERENCES TypeInter(IDTypeInter),
   FOREIGN KEY(IdCommande) REFERENCES Commande(IdCommande),
   FOREIGN KEY(IdTechnicien) REFERENCES Technicien(IdTechnicien),
   FOREIGN KEY(IdTechnicien_1) REFERENCES Technicien(IdTechnicien)
);

CREATE TABLE Constituer(
   IdArticle INT,
   IdPièce INT,
   PRIMARY KEY(IdArticle, IdPièce),
   FOREIGN KEY(IdArticle) REFERENCES Article(IdArticle),
   FOREIGN KEY(IdPièce) REFERENCES Pièce(IdPièce)
);

CREATE TABLE Contenir(
   IdCommande INT,
   IdArticle INT,
   Garantie VARCHAR(50),
   QteCOmART VARCHAR(50),
   QteExpArt VARCHAR(50),
   PRIMARY KEY(IdCommande, IdArticle),
   FOREIGN KEY(IdCommande) REFERENCES Commande(IdCommande),
   FOREIGN KEY(IdArticle) REFERENCES Article(IdArticle)
);

CREATE TABLE Concerne(
   IdArticle INT,
   IdTicket INT,
   PRIMARY KEY(IdArticle, IdTicket),
   FOREIGN KEY(IdArticle) REFERENCES Article(IdArticle),
   FOREIGN KEY(IdTicket) REFERENCES TicketSAV(IdTicket)
);
