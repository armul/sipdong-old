<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
	<xsl:template match="/">
		<w:document xmlns:wpc="http://schemas.microsoft.com/office/word/2010/wordprocessingCanvas" xmlns:mc="http://schemas.openxmlformats.org/markup-compatibility/2006" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:r="http://schemas.openxmlformats.org/officeDocument/2006/relationships" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:wp14="http://schemas.microsoft.com/office/word/2010/wordprocessingDrawing" xmlns:wp="http://schemas.openxmlformats.org/drawingml/2006/wordprocessingDrawing" xmlns:w10="urn:schemas-microsoft-com:office:word" xmlns:w="http://schemas.openxmlformats.org/wordprocessingml/2006/main" xmlns:w14="http://schemas.microsoft.com/office/word/2010/wordml" xmlns:wpg="http://schemas.microsoft.com/office/word/2010/wordprocessingGroup" xmlns:wpi="http://schemas.microsoft.com/office/word/2010/wordprocessingInk" xmlns:wne="http://schemas.microsoft.com/office/word/2006/wordml" xmlns:wps="http://schemas.microsoft.com/office/word/2010/wordprocessingShape" mc:Ignorable="w14 wp14">
		<w:body>
			<w:p w:rsidR="00605624" w:rsidRPr="00322569" w:rsidRDefault="00605624" w:rsidP="00322569">
				<w:pPr>
					<w:adjustRightInd w:val="0"/>
					<w:snapToGrid w:val="0"/>
					<w:spacing w:after="0" w:line="240" w:lineRule="auto"/>
					<w:jc w:val="center"/>
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
						<w:b/>
					</w:rPr>
				</w:pPr>
				<w:r w:rsidRPr="00322569">
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
						<w:b/>
					</w:rPr>
					<w:t>LEMBAR PENGECEKAN SPT LEBIH BAYAR</w:t>
				</w:r>
			</w:p>
			<w:p w:rsidR="00605624" w:rsidRPr="00605624" w:rsidRDefault="00605624" w:rsidP="00F272C2">
				<w:pPr>
					<w:adjustRightInd w:val="0"/>
					<w:snapToGrid w:val="0"/>
					<w:spacing w:after="0" w:line="240" w:lineRule="auto"/>
					<w:jc w:val="both"/>
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
					</w:rPr>
				</w:pPr>
			</w:p>
			<w:p w:rsidR="00605624" w:rsidRPr="00605624" w:rsidRDefault="00605624" w:rsidP="0085345E">
				<w:pPr>
					<w:tabs>
						<w:tab w:val="left" w:pos="1418"/>
						<w:tab w:val="left" w:pos="1701"/>
						<w:tab w:val="left" w:pos="5529"/>
						<w:tab w:val="left" w:pos="7230"/>
						<w:tab w:val="left" w:pos="7371"/>
						<w:tab w:val="right" w:pos="9355"/>
					</w:tabs>
					<w:adjustRightInd w:val="0"/>
					<w:snapToGrid w:val="0"/>
					<w:spacing w:after="0" w:line="240" w:lineRule="auto"/>
					<w:jc w:val="both"/>
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
					</w:rPr>
				</w:pPr>
				<w:r w:rsidRPr="00605624">
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
					</w:rPr>
					<w:t>Nama WP</w:t>
					<w:tab/>
					<w:t>:</w:t>
					<w:tab/>
					<w:t xml:space="preserve"><xsl:value-of select="SPTLB/NamaWP"/></w:t>
					<w:tab/>
					<w:t>Nilai SPT LB</w:t>
					<w:tab/>
					<w:t>:</w:t>
					<w:tab/>
					<w:t>Rp</w:t>
					<w:tab/>
					<w:t><xsl:value-of select="SPTLB/NilaiSPT"/></w:t>
				</w:r>
			</w:p>
			<w:p w:rsidR="00605624" w:rsidRPr="00605624" w:rsidRDefault="00605624" w:rsidP="0085345E">
				<w:pPr>
					<w:tabs>
						<w:tab w:val="left" w:pos="1418"/>
						<w:tab w:val="left" w:pos="1701"/>
						<w:tab w:val="left" w:pos="5529"/>
						<w:tab w:val="left" w:pos="7230"/>
						<w:tab w:val="left" w:pos="7371"/>
					</w:tabs>
					<w:adjustRightInd w:val="0"/>
					<w:snapToGrid w:val="0"/>
					<w:spacing w:after="0" w:line="240" w:lineRule="auto"/>
					<w:jc w:val="both"/>
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
					</w:rPr>
				</w:pPr>
				<w:r w:rsidRPr="00605624">
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
					</w:rPr>
					<w:t>NPWP</w:t>
					<w:tab/>
					<w:t>:</w:t>
					<w:tab/>
					<w:t><xsl:value-of select="SPTLB/NPWP"/></w:t>
					<w:tab/>
					<w:t>Tgl. Terima SPT</w:t>
					<w:tab/>
					<w:t>:</w:t>
					<w:tab/>
					<w:t><xsl:value-of select="SPTLB/TglLPAD"/></w:t>
				</w:r>
			</w:p>
			<w:p w:rsidR="00605624" w:rsidRPr="00605624" w:rsidRDefault="00605624" w:rsidP="00F272C2">
				<w:pPr>
					<w:tabs>
						<w:tab w:val="left" w:pos="1418"/>
						<w:tab w:val="left" w:pos="1701"/>
					</w:tabs>
					<w:adjustRightInd w:val="0"/>
					<w:snapToGrid w:val="0"/>
					<w:spacing w:after="0" w:line="240" w:lineRule="auto"/>
					<w:jc w:val="both"/>
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
					</w:rPr>
				</w:pPr>
				<w:r w:rsidRPr="00605624">
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
					</w:rPr>
					<w:t>Masa Pajak</w:t>
					<w:tab/>
					<w:t>:</w:t>
					<w:tab/>
					<w:t><xsl:value-of select="SPTLB/MsPjk"/></w:t>
				</w:r>
			</w:p>
			<w:p w:rsidR="00605624" w:rsidRPr="00605624" w:rsidRDefault="00605624" w:rsidP="00F272C2">
				<w:pPr>
					<w:tabs>
						<w:tab w:val="left" w:pos="1418"/>
						<w:tab w:val="left" w:pos="1701"/>
					</w:tabs>
					<w:adjustRightInd w:val="0"/>
					<w:snapToGrid w:val="0"/>
					<w:spacing w:after="0" w:line="240" w:lineRule="auto"/>
					<w:jc w:val="both"/>
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
					</w:rPr>
				</w:pPr>
				<w:r w:rsidRPr="00605624">
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
					</w:rPr>
					<w:t>Nama KAP</w:t>
					<w:tab/>
					<w:t>:</w:t>
					<w:tab/>
					<w:t><xsl:value-of select="SPTLB/NamaKAP"/></w:t>
				</w:r>
			</w:p>
			<w:p w:rsidR="00605624" w:rsidRDefault="00605624" w:rsidP="00F272C2">
				<w:pPr>
					<w:tabs>
						<w:tab w:val="left" w:pos="1418"/>
						<w:tab w:val="left" w:pos="1701"/>
					</w:tabs>
					<w:adjustRightInd w:val="0"/>
					<w:snapToGrid w:val="0"/>
					<w:spacing w:after="0" w:line="240" w:lineRule="auto"/>
					<w:jc w:val="both"/>
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
					</w:rPr>
				</w:pPr>
				<w:r w:rsidRPr="00605624">
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
					</w:rPr>
					<w:t>Jenis SPT</w:t>
					<w:tab/>
					<w:t>:</w:t>
					<w:tab/>
					<w:t xml:space="preserve"><xsl:value-of select="SPTLB/JnsSPT"/></w:t>
				</w:r>
			</w:p>
			<w:p w:rsidR="00605624" w:rsidRDefault="00605624" w:rsidP="00F272C2">
				<w:pPr>
					<w:adjustRightInd w:val="0"/>
					<w:snapToGrid w:val="0"/>
					<w:spacing w:after="0" w:line="240" w:lineRule="auto"/>
					<w:jc w:val="both"/>
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
					</w:rPr>
				</w:pPr>
			</w:p>
			<w:p w:rsidR="00605624" w:rsidRPr="00F272C2" w:rsidRDefault="00605624" w:rsidP="00F272C2">
				<w:pPr>
					<w:pStyle w:val="ListParagraph"/>
					<w:numPr>
						<w:ilvl w:val="0"/>
						<w:numId w:val="1"/>
					</w:numPr>
					<w:adjustRightInd w:val="0"/>
					<w:snapToGrid w:val="0"/>
					<w:spacing w:after="0" w:line="240" w:lineRule="auto"/>
					<w:ind w:left="284" w:hanging="284"/>
					<w:jc w:val="both"/>
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
						<w:b/>
					</w:rPr>
				</w:pPr>
				<w:r w:rsidRPr="00F272C2">
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
						<w:b/>
					</w:rPr>
					<w:t>Pengecekan atas SPT Wajib Pajak</w:t>
				</w:r>
			</w:p>
			<w:tbl>
				<w:tblPr>
					<w:tblStyle w:val="TableGrid"/>
					<w:tblW w:w="9356" w:type="dxa"/>
					<w:jc w:val="center"/>
					<w:tblLook w:val="04A0" w:firstRow="1" w:lastRow="0" w:firstColumn="1" w:lastColumn="0" w:noHBand="0" w:noVBand="1"/>
				</w:tblPr>
				<w:tblGrid>
					<w:gridCol w:w="571"/>
					<w:gridCol w:w="7083"/>
					<w:gridCol w:w="851"/>
					<w:gridCol w:w="851"/>
				</w:tblGrid>
				<w:tr w:rsidR="00F272C2" w:rsidRPr="00F13A89" w:rsidTr="00C06495">
					<w:trPr>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="571" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F13A89" w:rsidRDefault="00F272C2" w:rsidP="00EB3DC6">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									<w:b/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F13A89">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									<w:b/>
								</w:rPr>
								<w:t>No.</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="7083" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F13A89" w:rsidRDefault="00F272C2" w:rsidP="00EB3DC6">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									<w:b/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F13A89">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									<w:b/>
								</w:rPr>
								<w:t>Kriteria</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F13A89" w:rsidRDefault="00F272C2" w:rsidP="00EB3DC6">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									<w:b/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F13A89">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									<w:b/>
								</w:rPr>
								<w:t>Ya</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F13A89" w:rsidRDefault="00F272C2" w:rsidP="00EB3DC6">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									<w:b/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F13A89">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									<w:b/>
								</w:rPr>
								<w:t>Tidak</w:t>
							</w:r>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidTr="00C06495">
					<w:trPr>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="571" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00F272C2" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F272C2">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>1</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="7083" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00F272C2" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F272C2">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>SPT telah sesuai UU KUP Pasal 3</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00F272C2" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanA/Isian1 = 'Y'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00F272C2" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanA/Isian1 = 'T'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidTr="00C06495">
					<w:trPr>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="571" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00F272C2" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F272C2">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>2</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="7083" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00F272C2" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F272C2">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>SPT menyatakan Lebih Bayar</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00F272C2" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanA/Isian2 = 'Y'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00F272C2" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanA/Isian2 = 'T'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidTr="006C2FED">
					<w:trPr>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="571" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00F272C2" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F272C2">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>3</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="7083" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00F272C2" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F272C2">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>Memohon restitusi atas kelebihan pembayaran pajak</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:tcBorders>
								<w:bottom w:val="single" w:sz="4" w:space="0" w:color="auto"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00F272C2" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanA/Isian3 = 'Y'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:tcBorders>
								<w:bottom w:val="single" w:sz="4" w:space="0" w:color="auto"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00F272C2" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanA/Isian3 = 'T'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidTr="006C2FED">
					<w:trPr>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="571" w:type="dxa"/>
							<w:tcBorders>
								<w:bottom w:val="single" w:sz="4" w:space="0" w:color="auto"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00F272C2" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F272C2">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>4</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="7083" w:type="dxa"/>
							<w:tcBorders>
								<w:bottom w:val="single" w:sz="4" w:space="0" w:color="auto"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRDefault="00F272C2" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F272C2">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>Dalam hal SPT yang disampaikan berupa SPT Pembetulan:</w:t>
							</w:r>
						</w:p>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="00F272C2" w:rsidRDefault="00BC7F90" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F272C2">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>SPT tersebut telah memenuhi ketentuan dalam Pasal 8 ayat (1) dan ayat (1a) UU KUP</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:tcBorders>
								<w:bottom w:val="single" w:sz="4" w:space="0" w:color="auto"/>
							</w:tcBorders>
							<xsl:if test="contains(SPTLB/JnsSPT, 'Normal')">
								<w:shd w:val="clear" w:color="auto" w:fill="BFBFBF" w:themeFill="background1" w:themeFillShade="BF"/>
							</xsl:if>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00F272C2" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanA/Isian4 = 'Y'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:tcBorders>
								<w:bottom w:val="single" w:sz="4" w:space="0" w:color="auto"/>
							</w:tcBorders>
							<xsl:if test="contains(SPTLB/JnsSPT, 'Normal')">
								<w:shd w:val="clear" w:color="auto" w:fill="BFBFBF" w:themeFill="background1" w:themeFillShade="BF"/>
							</xsl:if>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00F272C2" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanA/Isian4 = 'T'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidTr="00C06495">
					<w:trPr>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="9356" w:type="dxa"/>
							<w:gridSpan w:val="4"/>
							<w:tcBorders>
								<w:bottom w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00F272C2" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F272C2">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>Kesimpulan</w:t>
							</w:r>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="005508DE" w:rsidRPr="00F272C2" w:rsidTr="006C2FED">
					<w:trPr>
						<w:trHeight w:hRule="exact" w:val="113"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="571" w:type="dxa"/>
							<w:tcBorders>
								<w:top w:val="nil"/>
								<w:bottom w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:right w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="005508DE" w:rsidRPr="00F272C2" w:rsidRDefault="005508DE" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="8785" w:type="dxa"/>
							<w:gridSpan w:val="3"/>
							<w:tcBorders>
								<w:top w:val="nil"/>
								<w:left w:val="nil"/>
								<w:bottom w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="005508DE" w:rsidRPr="00F272C2" w:rsidRDefault="005508DE" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidTr="006C2FED">
					<w:trPr>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="571" w:type="dxa"/>
							<w:tcBorders>
								<w:top w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:bottom w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:right w:val="single" w:sz="4" w:space="0" w:color="auto"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00F272C2" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanA/Kesimpulan = '1'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="8785" w:type="dxa"/>
							<w:gridSpan w:val="3"/>
							<w:tcBorders>
								<w:top w:val="nil"/>
								<w:left w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:bottom w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00F272C2" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F272C2">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>Bukan SPT</w:t>
							</w:r>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="005508DE" w:rsidRPr="00F272C2" w:rsidTr="006C2FED">
					<w:trPr>
						<w:trHeight w:hRule="exact" w:val="113"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="571" w:type="dxa"/>
							<w:tcBorders>
								<w:top w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:bottom w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:right w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="005508DE" w:rsidRPr="00F272C2" w:rsidRDefault="005508DE" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="8785" w:type="dxa"/>
							<w:gridSpan w:val="3"/>
							<w:tcBorders>
								<w:top w:val="nil"/>
								<w:left w:val="nil"/>
								<w:bottom w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="005508DE" w:rsidRPr="00F272C2" w:rsidRDefault="005508DE" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidTr="006C2FED">
					<w:trPr>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="571" w:type="dxa"/>
							<w:tcBorders>
								<w:top w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:bottom w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:right w:val="single" w:sz="4" w:space="0" w:color="auto"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00F272C2" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanA/Kesimpulan = '2'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="8785" w:type="dxa"/>
							<w:gridSpan w:val="3"/>
							<w:tcBorders>
								<w:top w:val="nil"/>
								<w:left w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:bottom w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00F272C2" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F272C2">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>SPT bukan permohonan pengembalian</w:t>
							</w:r>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="005508DE" w:rsidRPr="00F272C2" w:rsidTr="006C2FED">
					<w:trPr>
						<w:trHeight w:hRule="exact" w:val="113"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="571" w:type="dxa"/>
							<w:tcBorders>
								<w:top w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:bottom w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:right w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="005508DE" w:rsidRPr="00F272C2" w:rsidRDefault="005508DE" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="8785" w:type="dxa"/>
							<w:gridSpan w:val="3"/>
							<w:tcBorders>
								<w:top w:val="nil"/>
								<w:left w:val="nil"/>
								<w:bottom w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="005508DE" w:rsidRPr="00F272C2" w:rsidRDefault="005508DE" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidTr="006C2FED">
					<w:trPr>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="571" w:type="dxa"/>
							<w:tcBorders>
								<w:top w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:bottom w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:right w:val="single" w:sz="4" w:space="0" w:color="auto"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="005508DE" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanA/Kesimpulan = '3'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="8785" w:type="dxa"/>
							<w:gridSpan w:val="3"/>
							<w:tcBorders>
								<w:top w:val="nil"/>
								<w:left w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:bottom w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00F272C2" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F272C2">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>SPT permohonan pengembalian</w:t>
							</w:r>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="005508DE" w:rsidRPr="00F272C2" w:rsidTr="006C2FED">
					<w:trPr>
						<w:trHeight w:hRule="exact" w:val="113"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="571" w:type="dxa"/>
							<w:tcBorders>
								<w:top w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:right w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="005508DE" w:rsidRPr="00F272C2" w:rsidRDefault="005508DE" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="8785" w:type="dxa"/>
							<w:gridSpan w:val="3"/>
							<w:tcBorders>
								<w:top w:val="nil"/>
								<w:left w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="005508DE" w:rsidRPr="00F272C2" w:rsidRDefault="005508DE" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
						</w:p>
					</w:tc>
				</w:tr>
			</w:tbl>
			<w:p w:rsidR="00605624" w:rsidRDefault="00605624" w:rsidP="00F272C2">
				<w:pPr>
					<w:adjustRightInd w:val="0"/>
					<w:snapToGrid w:val="0"/>
					<w:spacing w:after="0" w:line="240" w:lineRule="auto"/>
					<w:jc w:val="both"/>
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
					</w:rPr>
				</w:pPr>
			</w:p>
			<w:p w:rsidR="00605624" w:rsidRPr="00F272C2" w:rsidRDefault="00605624" w:rsidP="00F272C2">
				<w:pPr>
					<w:pStyle w:val="ListParagraph"/>
					<w:numPr>
						<w:ilvl w:val="0"/>
						<w:numId w:val="1"/>
					</w:numPr>
					<w:adjustRightInd w:val="0"/>
					<w:snapToGrid w:val="0"/>
					<w:spacing w:after="0" w:line="240" w:lineRule="auto"/>
					<w:ind w:left="284" w:hanging="284"/>
					<w:jc w:val="both"/>
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
						<w:b/>
					</w:rPr>
				</w:pPr>
				<w:r w:rsidRPr="00F272C2">
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
						<w:b/>
					</w:rPr>
					<w:t>Pengecekan atas Kriteria/Syarat Wajib Pajak</w:t>
				</w:r>
			</w:p>
			<w:tbl>
				<w:tblPr>
					<w:tblStyle w:val="TableGrid"/>
					<w:tblW w:w="9356" w:type="dxa"/>
					<w:jc w:val="center"/>
					<w:tblLook w:val="04A0" w:firstRow="1" w:lastRow="0" w:firstColumn="1" w:lastColumn="0" w:noHBand="0" w:noVBand="1"/>
				</w:tblPr>
				<w:tblGrid>
					<w:gridCol w:w="571"/>
					<w:gridCol w:w="7083"/>
					<w:gridCol w:w="851"/>
					<w:gridCol w:w="851"/>
				</w:tblGrid>
				<w:tr w:rsidR="00F272C2" w:rsidRPr="00F13A89" w:rsidTr="00C06495">
					<w:trPr>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F13A89" w:rsidRDefault="00F272C2" w:rsidP="00EB3DC6">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									<w:b/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F13A89">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									<w:b/>
								</w:rPr>
								<w:t>No.</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="7088" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F13A89" w:rsidRDefault="00F272C2" w:rsidP="00EB3DC6">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									<w:b/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F13A89">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									<w:b/>
								</w:rPr>
								<w:t>Kriteria</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F13A89" w:rsidRDefault="00F272C2" w:rsidP="00EB3DC6">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									<w:b/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F13A89">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									<w:b/>
								</w:rPr>
								<w:t>Ya</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F13A89" w:rsidRDefault="00F272C2" w:rsidP="00EB3DC6">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									<w:b/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F13A89">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									<w:b/>
								</w:rPr>
								<w:t>Tidak</w:t>
							</w:r>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidTr="00C06495">
					<w:trPr>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00F272C2" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F272C2">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>1</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="7088" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00F272C2" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F272C2">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>Wajib Pajak kriteria tertentu sebagaimana dimaksud Pasal 17C UU KUP</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00F272C2" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanB/Isian1 = 'Y'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00C06495" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanB/Isian1 = 'T'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidTr="00C06495">
					<w:trPr>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00F272C2" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F272C2">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>2</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="7088" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00F272C2" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F272C2">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>Wajib Pajak yang memenuhi persyaratan tertentu sebagaimana dimaksud Pasal 17D UU KUP</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00F272C2" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanB/Isian2 = 'Y'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00C06495" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanB/Isian2 = 'T'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidTr="00C06495">
					<w:trPr>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:tcBorders>
								<w:bottom w:val="single" w:sz="4" w:space="0" w:color="auto"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00F272C2" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F272C2">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>3</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="7088" w:type="dxa"/>
							<w:tcBorders>
								<w:bottom w:val="single" w:sz="4" w:space="0" w:color="auto"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00F272C2" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F272C2">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>Memilih dilakukan pengembalian pendahuluan</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:tcBorders>
								<w:bottom w:val="single" w:sz="4" w:space="0" w:color="auto"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00F272C2" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanB/Isian3 = 'Y'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:tcBorders>
								<w:bottom w:val="single" w:sz="4" w:space="0" w:color="auto"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00F272C2" w:rsidRPr="00F272C2" w:rsidRDefault="00C06495" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanB/Isian3 = 'T'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="000917B9" w:rsidRPr="00F272C2" w:rsidTr="00C06495">
					<w:trPr>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:gridSpan w:val="4"/>
							<w:tcBorders>
								<w:bottom w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="000917B9" w:rsidRPr="00F272C2" w:rsidRDefault="000917B9" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F272C2">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>Kesimpulan</w:t>
							</w:r>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="005508DE" w:rsidRPr="00F272C2" w:rsidTr="006C2FED">
					<w:trPr>
						<w:trHeight w:hRule="exact" w:val="113"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:tcBorders>
								<w:top w:val="nil"/>
								<w:bottom w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:right w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="005508DE" w:rsidRPr="00F272C2" w:rsidRDefault="005508DE" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:gridSpan w:val="3"/>
							<w:tcBorders>
								<w:top w:val="nil"/>
								<w:left w:val="nil"/>
								<w:bottom w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="005508DE" w:rsidRPr="00F272C2" w:rsidRDefault="005508DE" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="000917B9" w:rsidRPr="00F272C2" w:rsidTr="006C2FED">
					<w:trPr>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:tcBorders>
								<w:top w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:bottom w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:right w:val="single" w:sz="4" w:space="0" w:color="auto"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="000917B9" w:rsidRPr="00F272C2" w:rsidRDefault="005508DE" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanB/Kesimpulan = '1'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:gridSpan w:val="3"/>
							<w:tcBorders>
								<w:top w:val="nil"/>
								<w:left w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:bottom w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="000917B9" w:rsidRPr="00F272C2" w:rsidRDefault="000917B9" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F272C2">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>Permohonan pengembalian sesuai Pasal 17B UU KUP</w:t>
							</w:r>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="005508DE" w:rsidRPr="00F272C2" w:rsidTr="006C2FED">
					<w:trPr>
						<w:trHeight w:hRule="exact" w:val="113"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:tcBorders>
								<w:top w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:bottom w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:right w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="005508DE" w:rsidRPr="00F272C2" w:rsidRDefault="005508DE" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:gridSpan w:val="3"/>
							<w:tcBorders>
								<w:top w:val="nil"/>
								<w:left w:val="nil"/>
								<w:bottom w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="005508DE" w:rsidRPr="00F272C2" w:rsidRDefault="005508DE" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="000917B9" w:rsidRPr="00F272C2" w:rsidTr="006C2FED">
					<w:trPr>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:tcBorders>
								<w:top w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:bottom w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:right w:val="single" w:sz="4" w:space="0" w:color="auto"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="000917B9" w:rsidRPr="00F272C2" w:rsidRDefault="000917B9" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanB/Kesimpulan = '2'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:gridSpan w:val="3"/>
							<w:tcBorders>
								<w:top w:val="nil"/>
								<w:left w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:bottom w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="000917B9" w:rsidRPr="00F272C2" w:rsidRDefault="000917B9" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F272C2">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>Permohonan pengembalian sesuai Pasal 17C UU KUP</w:t>
							</w:r>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="005508DE" w:rsidRPr="00F272C2" w:rsidTr="006C2FED">
					<w:trPr>
						<w:trHeight w:hRule="exact" w:val="113"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:tcBorders>
								<w:top w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:bottom w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:right w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="005508DE" w:rsidRPr="00F272C2" w:rsidRDefault="005508DE" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:gridSpan w:val="3"/>
							<w:tcBorders>
								<w:top w:val="nil"/>
								<w:left w:val="nil"/>
								<w:bottom w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="005508DE" w:rsidRPr="00F272C2" w:rsidRDefault="005508DE" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="000917B9" w:rsidRPr="00F272C2" w:rsidTr="006C2FED">
					<w:trPr>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:tcBorders>
								<w:top w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:bottom w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:right w:val="single" w:sz="4" w:space="0" w:color="auto"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="000917B9" w:rsidRPr="00F272C2" w:rsidRDefault="000917B9" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanB/Kesimpulan = '3'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:gridSpan w:val="3"/>
							<w:tcBorders>
								<w:top w:val="nil"/>
								<w:left w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:bottom w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="000917B9" w:rsidRPr="00F272C2" w:rsidRDefault="000917B9" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F272C2">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>Permohonan pengembalian sesuai Pasal 17D UU KUP</w:t>
							</w:r>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="005508DE" w:rsidRPr="00F272C2" w:rsidTr="006C2FED">
					<w:trPr>
						<w:trHeight w:hRule="exact" w:val="113"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:tcBorders>
								<w:top w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:right w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="005508DE" w:rsidRPr="00F272C2" w:rsidRDefault="005508DE" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:gridSpan w:val="3"/>
							<w:tcBorders>
								<w:top w:val="nil"/>
								<w:left w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="005508DE" w:rsidRPr="00F272C2" w:rsidRDefault="005508DE" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
						</w:p>
					</w:tc>
				</w:tr>
			</w:tbl>
			<w:p w:rsidR="00605624" w:rsidRPr="00605624" w:rsidRDefault="00605624" w:rsidP="00F272C2">
				<w:pPr>
					<w:adjustRightInd w:val="0"/>
					<w:snapToGrid w:val="0"/>
					<w:spacing w:after="0" w:line="240" w:lineRule="auto"/>
					<w:jc w:val="both"/>
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
					</w:rPr>
				</w:pPr>
			</w:p>
			<w:p w:rsidR="00605624" w:rsidRPr="00F272C2" w:rsidRDefault="00605624" w:rsidP="00F272C2">
				<w:pPr>
					<w:pStyle w:val="ListParagraph"/>
					<w:numPr>
						<w:ilvl w:val="0"/>
						<w:numId w:val="1"/>
					</w:numPr>
					<w:adjustRightInd w:val="0"/>
					<w:snapToGrid w:val="0"/>
					<w:spacing w:after="0" w:line="240" w:lineRule="auto"/>
					<w:ind w:left="284" w:hanging="284"/>
					<w:jc w:val="both"/>
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
						<w:b/>
					</w:rPr>
				</w:pPr>
				<w:r w:rsidRPr="00F272C2">
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
						<w:b/>
					</w:rPr>
					<w:t>Pengecekan atas pemenuhan syarat dalam Pasal 5 ayat (2) PMK 17/PMK.03/2013</w:t>
				</w:r>
			</w:p>
			<w:tbl>
				<w:tblPr>
					<w:tblStyle w:val="TableGrid"/>
					<w:tblW w:w="9356" w:type="dxa"/>
					<w:jc w:val="center"/>
					<w:tblLook w:val="04A0" w:firstRow="1" w:lastRow="0" w:firstColumn="1" w:lastColumn="0" w:noHBand="0" w:noVBand="1"/>
				</w:tblPr>
				<w:tblGrid>
					<w:gridCol w:w="571"/>
					<w:gridCol w:w="7083"/>
					<w:gridCol w:w="851"/>
					<w:gridCol w:w="851"/>
				</w:tblGrid>
				<w:tr w:rsidR="00322569" w:rsidRPr="00F13A89" w:rsidTr="00C06495">
					<w:trPr>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="000917B9" w:rsidRPr="00F13A89" w:rsidRDefault="000917B9" w:rsidP="00EB3DC6">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									<w:b/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F13A89">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									<w:b/>
								</w:rPr>
								<w:t>No.</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="7088" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="000917B9" w:rsidRPr="00F13A89" w:rsidRDefault="000917B9" w:rsidP="00EB3DC6">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									<w:b/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F13A89">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									<w:b/>
								</w:rPr>
								<w:t>Kriteria</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="000917B9" w:rsidRPr="00F13A89" w:rsidRDefault="000917B9" w:rsidP="00EB3DC6">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									<w:b/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F13A89">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									<w:b/>
								</w:rPr>
								<w:t>Ya</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="000917B9" w:rsidRPr="00F13A89" w:rsidRDefault="000917B9" w:rsidP="00EB3DC6">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									<w:b/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="00F13A89">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									<w:b/>
								</w:rPr>
								<w:t>Tidak</w:t>
							</w:r>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidTr="00C06495">
					<w:trPr>
						<w:cantSplit/>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:vMerge w:val="restart"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00BC7F90" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="000917B9">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>1</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="7088" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00BC7F90" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="000917B9">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>Tahun pajak yang diperiksa diaudit oleh Akuntan Publik yang tercantum pada daftar nama Akuntan Publik</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00BC7F90" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanC/Isian1 = 'Y'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00C06495" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanC/Isian1 = 'T'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="00322569" w:rsidRPr="000917B9" w:rsidTr="00C06495">
					<w:trPr>
						<w:cantSplit/>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:vMerge/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00322569" w:rsidRPr="000917B9" w:rsidRDefault="00322569" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:gridSpan w:val="3"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00322569" w:rsidRPr="000917B9" w:rsidRDefault="00322569" w:rsidP="00C06495">
							<w:pPr>
								<w:tabs>
									<w:tab w:val="left" w:pos="2866"/>
									<w:tab w:val="left" w:pos="3150"/>
								</w:tabs>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="000917B9">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>Nama Akuntan Publik</w:t>
								<w:tab/>
								<w:t>:</w:t>
								<w:tab/>
								<w:t>-</w:t>
							</w:r>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="00322569" w:rsidRPr="000917B9" w:rsidTr="00C06495">
					<w:trPr>
						<w:cantSplit/>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:vMerge/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00322569" w:rsidRPr="000917B9" w:rsidRDefault="00322569" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:gridSpan w:val="3"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00322569" w:rsidRPr="000917B9" w:rsidRDefault="00322569" w:rsidP="00C06495">
							<w:pPr>
								<w:tabs>
									<w:tab w:val="left" w:pos="2866"/>
									<w:tab w:val="left" w:pos="3150"/>
								</w:tabs>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="000917B9">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>No. Register Akuntan Publik</w:t>
								<w:tab/>
								<w:t>:</w:t>
								<w:tab/>
								<w:t>-</w:t>
							</w:r>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="00322569" w:rsidRPr="000917B9" w:rsidTr="00C06495">
					<w:trPr>
						<w:cantSplit/>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="000917B9" w:rsidRPr="000917B9" w:rsidRDefault="000917B9" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="000917B9">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>2</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="7088" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="000917B9" w:rsidRPr="000917B9" w:rsidRDefault="000917B9" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="000917B9">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>Pendapat Akuntan Publik atas Laporan Keuangan Tahun Pajak yang diperiksa adalah Wajar Tanpa Pengecualian</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<xsl:if test="SPTLB/PengecekanC/Isian1 = 'T'">
								<w:shd w:val="pct25" w:color="auto" w:fill="auto"/>
							</xsl:if>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="000917B9" w:rsidRPr="000917B9" w:rsidRDefault="000917B9" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanC/Isian2 = 'Y'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<xsl:if test="SPTLB/PengecekanC/Isian1 = 'T'">
								<w:shd w:val="pct25" w:color="auto" w:fill="auto"/>
							</xsl:if>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="000917B9" w:rsidRPr="000917B9" w:rsidRDefault="000917B9" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanC/Isian2 = 'T'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidTr="00C06495">
					<w:trPr>
						<w:cantSplit/>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:vMerge w:val="restart"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00BC7F90" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="000917B9">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>3</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="7088" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00BC7F90" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="000917B9">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>Laporan Keuangan 1 (satu) tahun sebelum Tahun Pajak yang dimintakan restitusi diaudit oleh Akuntan Publik yang tercantum pada daftar nama Akuntan Publik</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00BC7F90" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanC/Isian3 = 'Y'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00C06495" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanC/Isian3 = 'T'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="00322569" w:rsidRPr="000917B9" w:rsidTr="00C06495">
					<w:trPr>
						<w:cantSplit/>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:vMerge/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00322569" w:rsidRPr="000917B9" w:rsidRDefault="00322569" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:gridSpan w:val="3"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00322569" w:rsidRPr="000917B9" w:rsidRDefault="00322569" w:rsidP="00C06495">
							<w:pPr>
								<w:tabs>
									<w:tab w:val="left" w:pos="2866"/>
									<w:tab w:val="left" w:pos="3150"/>
								</w:tabs>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="000917B9">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>Nama Akuntan Publik</w:t>
								<w:tab/>
								<w:t>:</w:t>
								<w:tab/>
								<w:t>-</w:t>
							</w:r>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="00322569" w:rsidRPr="000917B9" w:rsidTr="00C06495">
					<w:trPr>
						<w:cantSplit/>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:vMerge/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00322569" w:rsidRPr="000917B9" w:rsidRDefault="00322569" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:gridSpan w:val="3"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00322569" w:rsidRPr="000917B9" w:rsidRDefault="00322569" w:rsidP="00C06495">
							<w:pPr>
								<w:tabs>
									<w:tab w:val="left" w:pos="2866"/>
									<w:tab w:val="left" w:pos="3150"/>
								</w:tabs>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="000917B9">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>No. Register Akuntan Publik</w:t>
								<w:tab/>
								<w:t>:</w:t>
								<w:tab/>
								<w:t>-</w:t>
							</w:r>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="00322569" w:rsidRPr="000917B9" w:rsidTr="00C06495">
					<w:trPr>
						<w:cantSplit/>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00BC7F90" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="000917B9">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>4</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="7088" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00BC7F90" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="000917B9">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>Pendapat Akuntan Publik atas Laporan Keuangan 1 (satu) tahun sebelum Tahun Pajak yang dimintakan restitusi adalah WTP</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<xsl:if test="SPTLB/PengecekanC/Isian3 = 'T'">
								<w:shd w:val="pct25" w:color="auto" w:fill="auto"/>
							</xsl:if>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00BC7F90" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanC/Isian4 = 'Y'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<xsl:if test="SPTLB/PengecekanC/Isian3 = 'T'">
								<w:shd w:val="pct25" w:color="auto" w:fill="auto"/>
							</xsl:if>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00BC7F90" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanC/Isian4 = 'T'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidTr="00C06495">
					<w:trPr>
						<w:cantSplit/>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:vMerge w:val="restart"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00BC7F90" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="000917B9">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:lastRenderedPageBreak/>
								<w:t>5</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="7088" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00BC7F90" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="000917B9">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>Laporan Keuangan 2 (dua) tahun sebelum Tahun Pajak yang dimintakan restitusi diaudit oleh Akuntan Publik yang tercantum pada daftar nama Akuntan Publik</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00BC7F90" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanC/Isian5 = 'Y'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00C06495" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanC/Isian5 = 'T'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="00322569" w:rsidRPr="000917B9" w:rsidTr="00C06495">
					<w:trPr>
						<w:cantSplit/>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:vMerge/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00322569" w:rsidRPr="000917B9" w:rsidRDefault="00322569" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:gridSpan w:val="3"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00322569" w:rsidRPr="000917B9" w:rsidRDefault="00322569" w:rsidP="00C06495">
							<w:pPr>
								<w:tabs>
									<w:tab w:val="left" w:pos="2866"/>
									<w:tab w:val="left" w:pos="3150"/>
								</w:tabs>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>Nama Akuntan Publik</w:t>
								<w:tab/>
								<w:t>:</w:t>
								<w:tab/>
								<w:t>-</w:t>
							</w:r>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="00322569" w:rsidRPr="000917B9" w:rsidTr="00C06495">
					<w:trPr>
						<w:cantSplit/>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:vMerge/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00322569" w:rsidRPr="000917B9" w:rsidRDefault="00322569" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:gridSpan w:val="3"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00322569" w:rsidRPr="000917B9" w:rsidRDefault="00322569" w:rsidP="00C06495">
							<w:pPr>
								<w:tabs>
									<w:tab w:val="left" w:pos="2866"/>
									<w:tab w:val="left" w:pos="3150"/>
								</w:tabs>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="000917B9">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>No. Register Akuntan Publik</w:t>
								<w:tab/>
								<w:t>:</w:t>
								<w:tab/>
								<w:t>-</w:t>
							</w:r>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="00322569" w:rsidRPr="000917B9" w:rsidTr="00C06495">
					<w:trPr>
						<w:cantSplit/>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00BC7F90" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="000917B9">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>6</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="7088" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00BC7F90" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="000917B9">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>Pendapat Akuntan Publik atas Laporan Keuangan 2 (dua) tahun sebelum Tahun Pajak yang dimintakan restitusi adalah WTP</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<xsl:if test="SPTLB/PengecekanC/Isian5 = 'T'">
								<w:shd w:val="pct25" w:color="auto" w:fill="auto"/>
							</xsl:if>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00BC7F90" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanC/Isian6 = 'Y'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<xsl:if test="SPTLB/PengecekanC/Isian5 = 'T'">
								<w:shd w:val="pct25" w:color="auto" w:fill="auto"/>
							</xsl:if>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00BC7F90" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanC/Isian6 = 'T'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="00322569" w:rsidRPr="000917B9" w:rsidTr="00C06495">
					<w:trPr>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00BC7F90" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="000917B9">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>7</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="7088" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00BC7F90" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="000917B9">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>Sedang dilakukan Pemeriksaan Bukti Permulaan, penyidikan, atau penuntutan tindak pidana perpajakan</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00BC7F90" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanC/Isian7 = 'Y'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00C06495" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanC/Isian7 = 'T'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="00322569" w:rsidRPr="000917B9" w:rsidTr="00C06495">
					<w:trPr>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:tcBorders>
								<w:bottom w:val="single" w:sz="4" w:space="0" w:color="auto"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00BC7F90" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="000917B9">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>8</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="7088" w:type="dxa"/>
							<w:tcBorders>
								<w:bottom w:val="single" w:sz="4" w:space="0" w:color="auto"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00BC7F90" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="000917B9">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>Dalam 5 (lima) tahun terakhir pernah dipidana karena melakukan tindak pidana di bidang perpajakan</w:t>
							</w:r>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:tcBorders>
								<w:bottom w:val="single" w:sz="4" w:space="0" w:color="auto"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00BC7F90" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanC/Isian8 = 'Y'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:tcBorders>
								<w:bottom w:val="single" w:sz="4" w:space="0" w:color="auto"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00C06495" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanC/Isian8 = 'T'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidTr="00C06495">
					<w:trPr>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:gridSpan w:val="4"/>
							<w:tcBorders>
								<w:bottom w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00BC7F90" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="000917B9">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>Kesimpulan</w:t>
							</w:r>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="0085345E" w:rsidRPr="000917B9" w:rsidTr="006C2FED">
					<w:trPr>
						<w:trHeight w:hRule="exact" w:val="113"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:tcBorders>
								<w:top w:val="nil"/>
								<w:bottom w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:right w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="0085345E" w:rsidRPr="000917B9" w:rsidRDefault="0085345E" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:gridSpan w:val="3"/>
							<w:tcBorders>
								<w:top w:val="nil"/>
								<w:left w:val="nil"/>
								<w:bottom w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="0085345E" w:rsidRPr="000917B9" w:rsidRDefault="0085345E" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidTr="006C2FED">
					<w:trPr>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:tcBorders>
								<w:top w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:bottom w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:right w:val="single" w:sz="4" w:space="0" w:color="auto"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00BC7F90" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanC/Kesimpulan = '1'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:gridSpan w:val="3"/>
							<w:tcBorders>
								<w:top w:val="nil"/>
								<w:left w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:bottom w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00BC7F90" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="000917B9">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>Penelitian</w:t>
							</w:r>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="0085345E" w:rsidRPr="000917B9" w:rsidTr="006C2FED">
					<w:trPr>
						<w:trHeight w:hRule="exact" w:val="113"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:tcBorders>
								<w:top w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:bottom w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:right w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="0085345E" w:rsidRPr="000917B9" w:rsidRDefault="0085345E" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:gridSpan w:val="3"/>
							<w:tcBorders>
								<w:top w:val="nil"/>
								<w:left w:val="nil"/>
								<w:bottom w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="0085345E" w:rsidRPr="000917B9" w:rsidRDefault="0085345E" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:bookmarkStart w:id="0" w:name="_GoBack"/>
							<w:bookmarkEnd w:id="0"/>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidTr="006C2FED">
					<w:trPr>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:tcBorders>
								<w:top w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:bottom w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:right w:val="single" w:sz="4" w:space="0" w:color="auto"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00BC7F90" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanC/Kesimpulan = '2'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:gridSpan w:val="3"/>
							<w:tcBorders>
								<w:top w:val="nil"/>
								<w:left w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:bottom w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00BC7F90" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="000917B9">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>Pemeriksaan Kantor</w:t>
							</w:r>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="0085345E" w:rsidRPr="000917B9" w:rsidTr="006C2FED">
					<w:trPr>
						<w:trHeight w:hRule="exact" w:val="113"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:tcBorders>
								<w:top w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:bottom w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:right w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="0085345E" w:rsidRPr="000917B9" w:rsidRDefault="0085345E" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:gridSpan w:val="3"/>
							<w:tcBorders>
								<w:top w:val="nil"/>
								<w:left w:val="nil"/>
								<w:bottom w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="0085345E" w:rsidRPr="000917B9" w:rsidRDefault="0085345E" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidTr="006C2FED">
					<w:trPr>
						<w:trHeight w:val="284"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:tcBorders>
								<w:top w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:bottom w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:right w:val="single" w:sz="4" w:space="0" w:color="auto"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="0085345E" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<xsl:if test="SPTLB/PengecekanC/Kesimpulan = '3'">
								<w:r w:rsidRPr="00F272C2">
									<w:rPr>
										<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
									</w:rPr>
									<w:t>×</w:t>
								</w:r>
							</xsl:if>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:gridSpan w:val="3"/>
							<w:tcBorders>
								<w:top w:val="nil"/>
								<w:left w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:bottom w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="00BC7F90" w:rsidRPr="000917B9" w:rsidRDefault="00BC7F90" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
							<w:r w:rsidRPr="000917B9">
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
								<w:t>Pemeriksaan Lapangan</w:t>
							</w:r>
						</w:p>
					</w:tc>
				</w:tr>
				<w:tr w:rsidR="0085345E" w:rsidRPr="000917B9" w:rsidTr="006C2FED">
					<w:trPr>
						<w:trHeight w:hRule="exact" w:val="113"/>
						<w:jc w:val="center"/>
					</w:trPr>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="567" w:type="dxa"/>
							<w:tcBorders>
								<w:top w:val="single" w:sz="4" w:space="0" w:color="auto"/>
								<w:right w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="0085345E" w:rsidRDefault="0085345E" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:jc w:val="center"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
						</w:p>
					</w:tc>
					<w:tc>
						<w:tcPr>
							<w:tcW w:w="851" w:type="dxa"/>
							<w:gridSpan w:val="3"/>
							<w:tcBorders>
								<w:top w:val="nil"/>
								<w:left w:val="nil"/>
							</w:tcBorders>
							<w:vAlign w:val="center"/>
						</w:tcPr>
						<w:p w:rsidR="0085345E" w:rsidRPr="000917B9" w:rsidRDefault="0085345E" w:rsidP="00C06495">
							<w:pPr>
								<w:adjustRightInd w:val="0"/>
								<w:snapToGrid w:val="0"/>
								<w:rPr>
									<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
								</w:rPr>
							</w:pPr>
						</w:p>
					</w:tc>
				</w:tr>
			</w:tbl>
			<w:p w:rsidR="00605624" w:rsidRDefault="00605624" w:rsidP="00F272C2">
				<w:pPr>
					<w:adjustRightInd w:val="0"/>
					<w:snapToGrid w:val="0"/>
					<w:spacing w:after="0" w:line="240" w:lineRule="auto"/>
					<w:jc w:val="both"/>
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
					</w:rPr>
				</w:pPr>
			</w:p>
			<w:p w:rsidR="005508DE" w:rsidRDefault="005508DE" w:rsidP="00F272C2">
				<w:pPr>
					<w:adjustRightInd w:val="0"/>
					<w:snapToGrid w:val="0"/>
					<w:spacing w:after="0" w:line="240" w:lineRule="auto"/>
					<w:jc w:val="both"/>
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
					</w:rPr>
				</w:pPr>
			</w:p>
			<w:p w:rsidR="00605624" w:rsidRPr="00605624" w:rsidRDefault="005508DE" w:rsidP="005508DE">
				<w:pPr>
					<w:adjustRightInd w:val="0"/>
					<w:snapToGrid w:val="0"/>
					<w:spacing w:after="0" w:line="240" w:lineRule="auto"/>
					<w:ind w:left="5670"/>
					<w:jc w:val="both"/>
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
					</w:rPr>
				</w:pPr>
				<w:r>
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
					</w:rPr>
					<w:t xml:space="preserve">Jambi, 21 Mei 2015</w:t>
				</w:r>
			</w:p>
			<w:p w:rsidR="00605624" w:rsidRPr="00605624" w:rsidRDefault="00605624" w:rsidP="005508DE">
				<w:pPr>
					<w:adjustRightInd w:val="0"/>
					<w:snapToGrid w:val="0"/>
					<w:spacing w:after="0" w:line="240" w:lineRule="auto"/>
					<w:ind w:left="5670"/>
					<w:jc w:val="both"/>
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
					</w:rPr>
				</w:pPr>
			</w:p>
			<w:p w:rsidR="00605624" w:rsidRPr="00605624" w:rsidRDefault="00605624" w:rsidP="005508DE">
				<w:pPr>
					<w:adjustRightInd w:val="0"/>
					<w:snapToGrid w:val="0"/>
					<w:spacing w:after="0" w:line="240" w:lineRule="auto"/>
					<w:ind w:left="5670"/>
					<w:jc w:val="both"/>
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
					</w:rPr>
				</w:pPr>
			</w:p>
			<w:p w:rsidR="00605624" w:rsidRPr="00605624" w:rsidRDefault="00605624" w:rsidP="005508DE">
				<w:pPr>
				<w:adjustRightInd w:val="0"/>
					<w:snapToGrid w:val="0"/>
					<w:spacing w:after="0" w:line="240" w:lineRule="auto"/>
					<w:ind w:left="5670"/>
					<w:jc w:val="both"/>
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
					</w:rPr>
				</w:pPr>
			</w:p>
			<w:p w:rsidR="00605624" w:rsidRPr="00605624" w:rsidRDefault="00605624" w:rsidP="005508DE">
				<w:pPr>
					<w:adjustRightInd w:val="0"/>
					<w:snapToGrid w:val="0"/>
					<w:spacing w:after="0" w:line="240" w:lineRule="auto"/>
					<w:ind w:left="5670"/>
					<w:jc w:val="both"/>
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
					</w:rPr>
				</w:pPr>
			</w:p>
			<w:p w:rsidR="00605624" w:rsidRPr="00605624" w:rsidRDefault="00605624" w:rsidP="005508DE">
				<w:pPr>
					<w:adjustRightInd w:val="0"/>
					<w:snapToGrid w:val="0"/>
					<w:spacing w:after="0" w:line="240" w:lineRule="auto"/>
					<w:ind w:left="5670"/>
					<w:jc w:val="both"/>
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
					</w:rPr>
				</w:pPr>
				<w:r>
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
					</w:rPr>
					<w:t>Muhammad Arif Mulya</w:t>
				</w:r>
			</w:p>
			<w:p w:rsidR="00605624" w:rsidRPr="00605624" w:rsidRDefault="00605624" w:rsidP="005508DE">
				<w:pPr>
					<w:adjustRightInd w:val="0"/>
					<w:snapToGrid w:val="0"/>
					<w:spacing w:after="0" w:line="240" w:lineRule="auto"/>
					<w:ind w:left="5670"/>
					<w:jc w:val="both"/>
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
					</w:rPr>
				</w:pPr>
				<w:r w:rsidRPr="00605624">
					<w:rPr>
						<w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
					</w:rPr>
					<w:t>NIP 198610212007101008</w:t>
				</w:r>
			</w:p>
			<w:sectPr w:rsidR="00605624" w:rsidRPr="00605624" w:rsidSect="006C2FED">
				<w:headerReference w:type="default" r:id="rId8"/>
				<w:pgSz w:w="11907" w:h="16839" w:code="9"/>
				<w:pgMar w:top="1134" w:right="1134" w:bottom="1134" w:left="1418" w:header="709" w:footer="709" w:gutter="0"/>
				<w:cols w:space="708"/>
				<w:docGrid w:linePitch="360"/>
			</w:sectPr>
		</w:body>
		</w:document>
	</xsl:template>
</xsl:stylesheet>