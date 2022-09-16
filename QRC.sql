--
-- PostgreSQL database dump
--

-- Dumped from database version 13.3
-- Dumped by pg_dump version 13.3

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

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: etudiant; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.etudiant (
    etud_nom character varying(100) NOT NULL,
    etud_prenom character varying(100) NOT NULL,
    etud_filiere character varying(200) NOT NULL,
    etud_session integer NOT NULL,
    etud_mention character varying(100) NOT NULL,
    etud_matricule character varying(20) NOT NULL,
    etud_cursus character varying(50),
    etud_formation character varying(100)
);


ALTER TABLE public.etudiant OWNER TO postgres;

--
-- Data for Name: etudiant; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.etudiant (etud_nom, etud_prenom, etud_filiere, etud_session, etud_mention, etud_matricule, etud_cursus, etud_formation) FROM stdin;
Konde1	jean1 Pierre1	robotic industrielle	2018	Tres Bien	18G00116	\N	\N
Kengne	Arnold B	TTIC	2018	TBF	18G00118	\N	\N
Kengne	Arnold B	TTIC	2018	TBF	18G00119	\N	\N
\.


--
-- Name: etudiant etudiant_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.etudiant
    ADD CONSTRAINT etudiant_pkey PRIMARY KEY (etud_matricule);


--
-- PostgreSQL database dump complete
--

