--
-- Datenbank: `db_quoterag`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `t_quotes`
--

CREATE TABLE IF NOT EXISTS `t_quotes` (
  `f_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_quote` varchar(1024) NOT NULL,
  `f_author` varchar(256) NOT NULL,
  `f_quoteyear` varchar(32) NOT NULL,
  PRIMARY KEY (`f_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Daten für Tabelle `t_quotes`
--

INSERT INTO `t_quotes` (`f_id`, `f_quote`, `f_author`, `f_quoteyear`) VALUES
(1, 'Langweiligkeit ist langweilig', 'Sepp Matter', '2014'),
(2, 'Papageiii', 'Vritz Kempf', '2013');
