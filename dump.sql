--
-- PostgreSQL database dump
--

-- Dumped from database version 9.5.19
-- Dumped by pg_dump version 13.13 (Debian 13.13-0+deb11u1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: unesco; Type: SCHEMA; Schema: -; Owner: loic.mauritius
--

CREATE SCHEMA unesco;


ALTER SCHEMA unesco OWNER TO "loic.mauritius";

SET default_tablespace = '';

--
-- Name: monuments; Type: TABLE; Schema: unesco; Owner: loic.mauritius
--

CREATE TABLE unesco.monuments (
    nom character varying(50) NOT NULL,
    description text,
    path character varying(70),
    description_anglais text
);


ALTER TABLE unesco.monuments OWNER TO "loic.mauritius";

--
-- Data for Name: monuments; Type: TABLE DATA; Schema: unesco; Owner: loic.mauritius
--

INSERT INTO unesco.monuments VALUES ('Alcazar de Tolède', 'L’alcazar de Tolède est une bâtisse du xvie siècle de forme rectangulaire située dans la partie la plus haute de la ville de Tolède (Castille-La Manche, Espagne). Cet imposant édifice aux murs de granit possède une grande esplanade centrale et quatre tours d’angle carrées. Il aurait abrité le siège du protectorat romain de la cité avant de devenir un palais wisigothique au VIème siècle puis une forteresse arabe au VIIIème siècle.', 'img/monuments/Alcazar.jpg', 'The Alcazar of Toledo is a 16th-century rectangular building located in the highest part of the city of Toledo (Castilla-La Mancha, Spain). This imposing granite-walled edifice features a large central esplanade and four square corner towers. It is thought to have been the seat of the city Roman protectorate, before becoming a Visigothic palace in the 6th century and an Arab fortress in the 8th century.');
INSERT INTO unesco.monuments VALUES ('Pont d’Alcántara', 'La porte d Alcántara (Puerta de Alcántara) est une porte fortifiée de style omeyyade située à Tolède, ville de la communauté autonome de Castille-La Manche en Espagne', 'img/monuments/Porte-Alcantara.jpg', 'The Puerta de Alcántara (Alcántara Gate) is an Umayyad-style fortified gate in Toledo, a city in the autonomous community of Castilla-La Mancha in Spain');
INSERT INTO unesco.monuments VALUES ('Musée de Santa Cruz', 'Le monastère de Saint-Jean des Rois de Tolède (Castille-La Manche, Espagne) est un monastère de l’ordre franciscain, qui fut construit sous le patronage de la reine Isabelle Ire de Castille afin d’en faire un mausolée royal, en commémoration de la bataille de Toro et de la naissance du prince Jean. Il est l un des exemples les plus éclatants du style gothique isabélin en Espagne et le bâtiment le plus important érigé par les Rois catholiques. Le monastère est aussi un mémorial pour leurs réalisations et leur programme politique.', 'img/monuments/Musee_Santa_Cruz.jpg', 'Santa Cruz Museum is a 16th-century Plateresque building. It was one of the city s most important hospitals before being converted into a museum in the 19th century.');
INSERT INTO unesco.monuments VALUES ('Monastère de Saint-Jean des rois', 'Le monastère de Saint-Jean des Rois de Tolède (Castille-La Manche, Espagne) est un monastère de l’ordre franciscain, qui fut construit sous le patronage de la reine Isabelle Ire de Castille afin d’en faire un mausolée royal, en commémoration de la bataille de Toro et de la naissance du prince Jean. Il est l un des exemples les plus éclatants du style gothique isabélin en Espagne et le bâtiment le plus important érigé par les Rois catholiques. Le monastère est aussi un mémorial pour leurs réalisations et leur programme politique.', 'img/monuments/Monastere_de_Saint-Jean_des_rois.JPG', 'The Monastery of St. John of the Kings in Toledo (Castilla-La Mancha, Spain) is a monastery of the Franciscan order, built under the patronage of Queen Isabella I of Castilla as a royal mausoleum to commemorate the Battle of Toro and the birth of Prince John. It is one of Spain s most striking examples of the Isabelline Gothic style, and the most important building erected by the Catholic Monarchs. The monastery is also a memorial to their achievements and political program.');
INSERT INTO unesco.monuments VALUES ('Monastère San Pedro Mártir', 'Le monastère San Pedro Mártir à Tolède est un ancien monastère dominicain qui est devenu l un des monastères les plus riches de la ville à partir de 1407 grâce à des donations et des agrandissements. La Faculté de droit et des sciences sociales de l’ Université de Castille-La Manche y est hébergée depuis 1991.', 'img/monuments/Monastere_San_Pedro_Martir.jpg', 'The San Pedro Mártir monastery in Toledo is a former Dominican monastery that became one of the city’s richest monasteries from 1407 onwards, thanks to donations and extensions. The Faculty of Law and Social Sciences of the University of Castilla-La Mancha has been housed here since 1991.');
INSERT INTO unesco.monuments VALUES ('Église Sainte-Léocadie de Tolède', 'L’église Sainte-Léocadie est une église de style mudéjar située à Tolède, capitale de la province espagnole du même nom et de la communauté autonome de Castille-La Manche. Elle est dédiée à sainte Léocadie de Tolède (es) qui est fêtée le 9 décembre.', 'img/monuments/Eglise_Sainte-Leocadie.JPG', 'The Church of Saint Leocadie is a Mudejar-style church located in Toledo, capital of the Spanish province of the same name and of the autonomous community of Castilla-La Mancha. It is dedicated to Saint Leocadie of Toledo (es), whose feast day is December 9.');
INSERT INTO unesco.monuments VALUES ('Mosquée Bab al-Mardum', 'La mosquée Bab al-Mardum est une ancienne mosquée de la ville de Tolède, transformée en l’église Cristo de la Luz, aujourd’hui désacralisée et reconvertie en un musée, la mezquita Cristo de la Luz.', 'img/monuments/Mosquee_Bab_al-Mardum.jpg', 'The Bab al-Mardum mosque is a former mosque in the city of Toledo, transformed into the Cristo de la Luz church, now desecrated and converted into a museum, the Cristo de la Luz mezquita.');
INSERT INTO unesco.monuments VALUES ('Église San Bartolomé de Tolède', 'L’église San Bartolomé à Tolède, en Espagne, est un monument religieux remarquable qui témoigne de l’histoire et de l’architecture de la ville. Construite au XIIIe siècle, cette église gothique présente une façade imposante avec des éléments sculpturaux détaillés. L’intérieur de l’église abrite de magnifiques voûtes gothiques, des colonnes élancées et des vitraux colorés qui créent une atmosphère sacrée. L’église San Bartolomé est également connue pour sa chapelle de style mudéjar, un exemple d’art islamique chrétien unique dans la région. Les amateurs d’histoire et d’architecture seront captivés par cette église, qui incarne l’héritage artistique et religieux de Tolède.', 'img/monuments/Eglise_St-Bartholome.jpg', 'The Church of San Bartolomé in Toledo, Spain, is a remarkable religious monument that bears witness to the city’s history and architecture. Built in the 13th century, this Gothic church features an imposing façade with detailed sculptural elements. Inside, the church’s magnificent Gothic vaults, slender columns and colorful stained glass windows create a sacred atmosphere. San Bartolomé is also famous for its Mudejar-style chapel, an example of Christian Islamic art unique in the region. Lovers of history and architecture will be captivated by this church, which embodies Toledo’s artistic and religious heritage.');
INSERT INTO unesco.monuments VALUES ('Église Santo Tomé de Tolède', 'L’église Santo Tomé à Tolède, en Espagne, est un monument historique d’une grande importance artistique et culturelle. Construite au XIVe siècle, cette église gothique abrite l’une des œuvres les plus célèbres du peintre espagnol El Greco, intitulée "Le Burial du Comte d’Orgaz". Cette fresque monumentale, située dans la chapelle principale, est un chef-d’œuvre de la Renaissance espagnole et attire des visiteurs du monde entier. Outre cette pièce remarquable, l’église Santo Tomé est également connue pour son architecture impressionnante, ses voûtes gothiques et ses détails sculpturaux. C’est un lieu chargé d’histoire et de spiritualité, offrant une expérience culturelle inoubliable aux amateurs d’art et aux amateurs d’architecture.', 'img/monuments/Eglise_Santo_tome.PNG', 'The Santo Tomé church in Toledo, Spain, is a historic monument of great artistic and cultural importance. Built in the 14th century, this Gothic church is home to one of the most famous works by Spanish painter El Greco, entitled "The Burial of the Count of Orgaz". This monumental fresco, located in the main chapel, is a masterpiece of the Spanish Renaissance and attracts visitors from all over the world. In addition to this remarkable piece, the Santo Tomé church is also known for its impressive architecture, Gothic vaults and sculptural details. It’s a place steeped in history and spirituality, offering an unforgettable cultural experience for art lovers and architecture enthusiasts alike.');
INSERT INTO unesco.monuments VALUES ('Pont de San Martin', 'Le pont San Martin à Tolède est un monument emblématique du XIVe siècle qui traverse le fleuve Tage. Avec ses cinq arches en pierre élégantes, il offre une vue panoramique sur la ville historique de Tolède. Les tours défensives rappellent son importance stratégique passée. Ce pont, à la fois fonctionnel et d’une beauté intemporelle, relie les deux rives du Tage, facilitant la circulation des habitants et des visiteurs. C’est un symbole vivant de l’histoire et de l’héritage culturel de Tolède, attirant les visiteurs pour sa vue magnifique et son ambiance médiévale.', 'img/monuments/Pont_de_San_Martin.jpg', 'San Martín Bridge is an emblematic 14th-century monument that crosses the Tagus River. With its five elegant stone arches, it offers panoramic views over the historic city of Toledo. Its defensive towers are a reminder of its past strategic importance. This bridge, at once functional and timelessly beautiful, links the two banks of the Tagus, facilitating traffic for locals and visitors alike. It is a living symbol of Toledo’s history and cultural heritage, attracting visitors for its magnificent views and medieval ambience.');


--
-- Name: monuments monuments_pkey; Type: CONSTRAINT; Schema: unesco; Owner: loic.mauritius
--

ALTER TABLE ONLY unesco.monuments
    ADD CONSTRAINT monuments_pkey PRIMARY KEY (nom);


--
-- PostgreSQL database dump complete
--
