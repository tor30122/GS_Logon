SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Tabellstruktur for tabell `logon_users`
--

CREATE TABLE `logon_users` (
  `userID` int(11) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `userPassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dataark for tabell `logon_users`
--

INSERT INTO `logon_users` (`userID`, `userName`, `userPassword`) VALUES
(7, 'Greveskogen', 'Greveskogen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logon_users`
--
ALTER TABLE `logon_users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logon_users`
--
ALTER TABLE `logon_users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;
